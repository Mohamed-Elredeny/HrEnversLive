<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use function PHPUnit\Framework\isNull;

class Leave extends Model
{
    protected $table = 'leaves';
    protected $guarded = [];
    public $states = [
        'handOver' => 'Hand Over Stag',
        'ManagerApproval1' => 'Direct Supervisor Approval',
        'ManagerApproval2' => 'Manager Approval',
        'ManagerApproval3' => 'Head of Department (HOD) Approval',
        'ManagerApproval4' => 'Business Unit Head (BUH) Approval',
        'ManagerApproval5' => 'General Manager Approval',
        'EmployeeRelation' => 'Employee Relation',
        'HrApproval' => 'Hr Approval',

        'ClearanceAccommodation' => 'Facilities Department',
        'ClearancePlant' => 'Plant Department',
        'ClearanceStoresMain' => 'Main Store Department',
        'ClearanceStoresSite' => 'Site Store Department',
        'ClearanceIT' => 'IT Department',
        'ClearanceFinance' => 'Finance Department',

        'FinalApprovalAdministration' => 'Administration Department',
        'FinalApprovalHrFinal' => 'Hr Final Department',
        'FinalApprovalImmigration' => 'Immigration Department',

        'approved' => 'Approved',
    ];


    public function getActiveStage()
    {
        $stages = $this->hasMany(LeaveStage::class, 'leave_id')->orderBy('id', 'asc')->get();
        $active = "No pending stages found.";
        $nextActive = null;
        $previousStage = null;
        $allApproved = true; // Assume all stages are approved initially
        $allPending = true; // Assume all stages are pending initially

        foreach ($stages as $stage) {
            // Skip stages without a responsible employee (e.g., ManagerApproval)
            if (Str::startsWith($stage['stage_name'], 'ManagerApproval') && is_null($stage['responsible_employee'])) {
                continue; // Skip this stage
            }

            // Check if any stage is not approved
            if ($stage['status'] !== 'approved') {
                $allApproved = false;
            }

            // Check if any stage is not pending
            if ($stage['status'] !== 'pending') {
                $allPending = false;
            }

            // Check for the active stage (pending or returned)
            if ($stage['status'] === 'pending' || $stage['status'] === 'backToSender') {
                if (Str::contains($stage['stage_name'], 'Clearance')) {
                    $active = 'Clearance';
                } else {
                    $active = $stage['stage_name'];
                }

                // Find the next active stage (next pending stage)
                $nextActive = $this->getNextActiveStage($stages, $stage);
                break; // Stop after finding the first active stage
            }

            // Track the previous stage (last approved stage)
            if ($stage['status'] === 'approved') {
                $previousStage = $stage['stage_name'];
            }
        }

        // If all stages are approved, set the active stage to 'approved'
        if ($allApproved) {
            $active = 'approved';
        }

        // If all stages are pending, set the active stage to the first pending stage
        if ($allPending) {
            foreach ($stages as $stage) {
                // Skip stages without a responsible employee (e.g., ManagerApproval)
                if (Str::startsWith($stage['stage_name'], 'ManagerApproval') && is_null($stage['responsible_employee'])) {
                    continue; // Skip this stage
                }

                if ($stage['status'] === 'pending') {
                    if (Str::contains($stage['stage_name'], 'Clearance')) {
                        $active = 'Clearance';
                    } else {
                        $active = $stage['stage_name'];
                    }
                    break; // Stop after finding the first pending stage
                }
            }
        }

        // If at this array leave stage, this stage can be accessed if the user has permission; otherwise, hide it
        $ignores = ['Clearance'];
        $active_stage = LeaveStage::where('stage_name', $active)->where('leave_id', $this->id)->first();

        return [
            'active' => $active,
            'next_active' => $nextActive,
            'previous_stage' => $previousStage,
        ];
    }
    public function isShowable($stageKey)
    {
        $activeStageKey = $this->getActiveStage()['active'];
        $keys = array_keys($this->states);

        // If all stages are approved, show all stages
        if ($activeStageKey === 'approved') {
            return true;
        }

        // If the active stage is 'Clearance', show all stages up to and including the Clearance section
        if ($activeStageKey === 'Clearance') {
            $stageIndex = array_search($stageKey, $keys);
            $firstClearanceIndex = null;

            // Find the index of the first Clearance stage
            foreach ($keys as $index => $key) {
                if (strpos($key, 'Clearance') !== false) {
                    $firstClearanceIndex = $index;
                    break;
                }
            }

            // If the stage is before or within the Clearance section, it is showable
            if ($firstClearanceIndex !== null && $stageIndex <= $firstClearanceIndex) {
                return true;
            }

            // If the stage is a Clearance stage, it is showable
            if (strpos($stageKey, 'Clearance') !== false) {
                return true;
            }

            return false;
        }

        // For other cases, use the index-based logic
        $activeIndex = array_search($activeStageKey, $keys);
        $stageIndex = array_search($stageKey, $keys);

        if ($activeIndex === false || $stageIndex === false) {
            return false;
        }

        // Check if the stage is skipped (e.g., ManagerApproval without a responsible employee)
        $stage = LeaveStage::where('stage_name', $stageKey)->where('leave_id', $this->id)->first();
        if (Str::startsWith($stageKey, 'ManagerApproval') && is_null($stage->responsible_employee)) {
            return false; // Skip this stage
        }

        return $stageIndex <= $activeIndex;
    }
    protected function getNextActiveStage($stages, $currentStage)
    {
        $foundCurrent = false;
        foreach ($stages as $stage) {
            if ($foundCurrent && ($stage['status'] === 'pending' || $stage['status'] === 'backToSender')) {
                return $stage['stage_name'];
            }
            if ($stage['id'] === $currentStage['id']) {
                $foundCurrent = true;
            }
        }
        return "No next pending stage found.";
    }

    public
    function employee()
    {
        return $this->belongsTo(Employee::class, 'employee_id');
    }

    public
    function hasStages()
    {
        return $this->hasMany(LeaveStage::class, 'leave_id');
    }

    public
    function type()
    {
        return $this->belongsTo(LeaveType::class, 'leave_type_id');
    }

    public
    function responsible_employees($stage)
    {
        $res = [];
        $stages = LeaveStage::where('leave_id', $this->id)->where('stage_name', $stage)->pluck('responsible_employee')->toArray();
        foreach ($stages as $stage) {
            $emp = Employee::find($stage);
            if (isset($emp->empName)) {
                $res[] = $emp->empName . '-' . $emp->mobile;
            }
        }
        return $res;
    }

    public
    function my_role_in_leave($employee_id)
    {
        $res = [];
        $stages = LeaveStage::where('leave_id', $this->id)->where('responsible_employee', $employee_id)->pluck('stage_name')->toArray();
        foreach ($stages as $stage) {
            if (isset($this->states[$stage])) {
                $res[] = $this->states[$stage];
            }
        }
        return $res;
    }

    public
    function next_stage_pending_employees()
    {
        $stagex = $this->next_stage();
        $stages = LeaveStage::where('leave_id', $this->id)->where('stage_name', $stagex)->where('status', '!=', 'approved')->pluck('responsible_employee')->toArray();
        foreach ($stages as $stage) {
            $emp = Employee::find($stage);
            if (isset($emp->empName)) {
                $res[] = $emp->empName . '-' . $emp->mobile;
            }
        }
        return $res ?? [$this->states[$stagex] . " team"];
    }

    public
    function next_stage()
    {
        $res = [];
        $stages = LeaveStage::where('leave_id', $this->id)->pluck('stage_name')->toArray();
        $current_stages = array_values(array_unique($stages));
        $index = array_search($this->status, $current_stages);
        $count_stages = LeaveStage::where('leave_id', $this->id)->where('stage_name', $current_stages[$index] ?? $this->status)->where('status', '!=', 'approved')->count();
        if (isset($current_stages[$index + 1]) && $count_stages <= 0) {
            return $current_stages[$index + 1];
        }
        return $current_stages[$index] ?? $this->status;
    }


    public
    function getStageStatus($stage_name)
    {
        $status = array_unique(LeaveStage::where('leave_id', $this->id)->where('stage_name', $stage_name)->pluck('status')->toArray());
        if (count($status) == 1) {
            return $status[0];
        } else {
            return 'pending';
        }
        //approved
        //rejected
        //cancelled
        //pending
    }
}

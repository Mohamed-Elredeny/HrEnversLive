<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\Leave;
use App\Models\LeaveStage;
use App\Models\LeaveType;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class LeavesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employee = auth('employee')->user();

        $responsible_leaves_ids = array_unique(LeaveStage::where('responsible_employee', $employee->id)->pluck('leave_id')->toArray());
        $responsible_leaves_ids1 = [];
        $responsible_leaves_ids2 = [];
        $responsible_leaves_ids3 = [];
        $responsible_leaves_ids4 = [];
        $responsible_leaves_ids5 = [];
        $responsible_leaves_ids6 = [];
        $responsible_leaves_ids7 = [];
        $responsible_leaves_ids8 = [];
        if ($employee->isHasPermission('EmployeeRelation')) {
            $responsible_leaves_ids1 = array_unique(LeaveStage::where('responsible_employee', 'EmployeeRelation')->pluck('leave_id')->toArray());
        }
        if ($employee->isHasPermission('ClearanceAccommodation')) {
            $responsible_leaves_ids2 = array_unique(LeaveStage::where('responsible_employee', 'ClearanceAccommodation')->pluck('leave_id')->toArray());
        }
        if ($employee->isHasPermission('ClearancePlant')) {
            $responsible_leaves_ids3 = array_unique(LeaveStage::where('responsible_employee', 'ClearancePlant')->pluck('leave_id')->toArray());
        }
        if ($employee->isHasPermission('ClearanceStores')) {
            $responsible_leaves_ids4 = array_unique(LeaveStage::where('responsible_employee', 'ClearanceStores')->pluck('leave_id')->toArray());
        }
        if ($employee->isHasPermission('ClearanceFinance')) {
            $responsible_leaves_ids5 = array_unique(LeaveStage::where('responsible_employee', 'ClearanceFinance')->pluck('leave_id')->toArray());
        }
        if ($employee->isHasPermission('ClearanceIT')) {
            $responsible_leaves_ids6 = array_unique(LeaveStage::where('responsible_employee', 'ClearanceIT')->pluck('leave_id')->toArray());
        }
        if ($employee->isHasPermission('HrApproval')) {
            $responsible_leaves_ids7 = array_unique(LeaveStage::where('responsible_employee', 'HrApproval')->pluck('leave_id')->toArray());
        }
        if ($employee->isHasPermission('GroupHRDirectorApproval')) {
            $responsible_leaves_ids8 = array_unique(LeaveStage::where('responsible_employee', 'GroupHRDirectorApproval')->pluck('leave_id')->toArray());
        }
        $responsible_leaves_merge = array_merge($responsible_leaves_ids, $responsible_leaves_ids1, $responsible_leaves_ids2, $responsible_leaves_ids3, $responsible_leaves_ids4, $responsible_leaves_ids5, $responsible_leaves_ids6, $responsible_leaves_ids7, $responsible_leaves_ids8);
        $responsible_leaves_ids = array_unique($responsible_leaves_merge);
        $responsible_leaves = Leave::whereIn('id', $responsible_leaves_ids)->latest()->get();
        $leaves = Leave::where('employee_id', $employee->id)->latest()->get();
        $leave_main = new Leave();
        $states = $leave_main->states;
        return view('employees.leaves.index', compact('leaves', 'employee', 'responsible_leaves', 'states'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $employee = auth('employee')->user();
        $result = $employee;
        $stringDateFromDatabase = $employee->joiningDate;
        $carbonDate = Carbon::parse($stringDateFromDatabase);
        $today = Carbon::now();
        $differenceInDays = $today->diffInDays($carbonDate);
        //Make sure your active emp has joining date valid.
        $leaves_types = LeaveType::where('employee_category', $employee->designation)->orWhere('employee_category', 'all')->where('joining_days', '<=', $differenceInDays)->get();
        $employees = Employee::where('company_id', $employee->company_id)->orWhere('empCode', 6398)->get();
        $managers_and_head_need_gm = ['phasedfosdfjlkds'];
        return view('employees.leaves.create', compact('result', 'employee', 'leaves_types', 'employees', 'managers_and_head_need_gm'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the main leave request fields
        $available = LeaveType::find($request->leaveType)->joining_days ?? 0;
//        $request->validate([
//            'leaveType' => 'required|exists:leaves_types,id',
//            'startDate' => 'required|date',
//            'endDate' => 'required|date|after:startDate',
//            'phoneNumber' => 'required|regex:/^\d{8,15}$/',
//            'days' => 'required|numeric|gt:0|max:' . $available,
//            'handOver.*' => 'required|exists:employees,id', // Validate dynamic dropdowns
//        ], [
//            'leaveType.required' => 'Leave type is required.',
//            'leaveType.exists' => 'Invalid leave type selected.',
//            'endDate.after' => 'The end date must be after the start date.',
//            'days.gt' => 'The number of days must be greater than 0.',
//            'days.max' => 'The number of days must not exceed the available limit of your leaves which is ' . $available . '.',
//            'phoneNumber.regex' => 'Phone number must be between 8 to 15 digits.',
//            'handOver.*.required' => 'You must select an employee for all handover dropdowns.',
//            'handOver.*.exists' => 'Invalid employee selected in the handover.',
//        ]);
        // Check leave type availability
        $leave_type = LeaveType::where('name', $request->leaveType)->first();
        $employee = auth('employee')->user();
        $leave_stats = $leave_type->getEmpLeaves($employee)['statistics'][$request->leaveType] ?? null;

        if ($leave_stats && $leave_stats['remain'] != 0) {
            return redirect()->back()->with('error', 'You need ' . $leave_stats['remain'] . ' more workdays to qualify for this leave. Unpaid leave is an option for urgent situations.');
        }

        if ($leave_stats && $leave_stats['available'] <= 0) {
            return redirect()->back()->with('error', 'This leave is not available.');
        }

        // Prepare the leave data
        $normal_leave_attachments = $request->normal_leave_attachments ?? [];
        foreach ($normal_leave_attachments as $attachment) {
            $fileName = $attachment->getClientOriginalName();
            $image = time() . '_' . $fileName;
            $attachments_path_normal[] = $image;
            $attachment->move(public_path('assets/images/'), $image);
        }
        $normal_leave_attachments_path = implode('|', $attachments_path_normal);


        $handover_leave_attachments = $request->handover_leave_attachments ?? [];
        foreach ($handover_leave_attachments as $attachment) {
            $fileName = $attachment->getClientOriginalName();
            $image = time() . '_' . $fileName;
            $attachments_path_handover[] = $image;
            $attachment->move(public_path('assets/images/'), $image);
        }
        $handover_leave_attachments_path = implode('|', $attachments_path_handover);

        $extraInfo = [
            'from_date' => $request->FromDate,
            'to_date' => $request->ToDate,
            'days' => $request->days,
            'phoneNumber' => $request->phoneNumber,
            'reasons' => $request->reasons ?? '',
            'leaveCountry' => $request->leaveCountry ?? '',
            'exitPermit' => $request->exitPermit ?? '',
            'TicketPurchasing' => $request->TicketPurchasing ?? '',
            'TicketPurchasingInput' => $request->requestCompanyDate ?? '',
            'attachments' => [
                'normal_leave_attachments' => $normal_leave_attachments_path,
                'handover_leave_attachments' => $handover_leave_attachments_path
            ]
        ];
        $extraInfo = json_encode($extraInfo);

        // Create the leave request
        $leave = Leave::create([
            'leave_type_id' => $leave_type->id,
            'employee_id' => $employee->id,
            'status' => 'handOver',
            'extraInfo' => $extraInfo,
        ]);

        // Handle handover employees
        if ($request->has('handOver') && is_array($request->handOver)) {
            foreach ($request->handOver as $handoverEmployeeId) {
                LeaveStage::create([
                    'leave_id' => $leave->id,
                    'responsible_employee' => $handoverEmployeeId,
                    'stage_name' => 'handOver',
                    'comments' => $request->handOverComments ?? '',
                    'attachments' => '', // Optional attachments
                    'extraInfo' => '',
                    'status' => 'pending',
                ]);
            }
        }

        // Manager approvals
        for ($i = 1; $i <= 5; $i++) {
            $approvals = $request->input('Approval' . $i, []);
            foreach ($approvals as $approvalEmployeeId) {
                LeaveStage::create([
                    'leave_id' => $leave->id,
                    'responsible_employee' => $approvalEmployeeId,
                    'stage_name' => 'ManagerApproval' . $i,
                    'comments' => $request->ApprovalComments ?? '',
                    'attachments' => '',
                    'extraInfo' => '',
                    'status' => 'pending',
                ]);
            }
        }

        // Handle GM approval
        if ($request->has('gmApproval') && is_array($request->gmApproval)) {
            foreach ($request->gmApproval as $gmApprovalId) {
                LeaveStage::create([
                    'leave_id' => $leave->id,
                    'responsible_employee' => $gmApprovalId,
                    'stage_name' => 'gmApproval',
                    'comments' => $request->gmApprovalComments ?? '',
                    'attachments' => '',
                    'extraInfo' => '',
                    'status' => 'pending',
                ]);
            }
        }
        // Add other approval stages
//        $stages = [
//            'EmployeeRelation',
//            'HrApproval',
//            'GroupHRDirectorApproval',
//            'BookFlightTicket',
//            'ClearanceAccommodation',
//            'ClearancePlant',
//            'ClearanceStores',
//            'ClearanceFinance',
//            'ClearanceIT',
//            'ConfirmationLeave',
//        ];

        foreach (array_keys($leave->states) as $stage) {
            if ($stage != "GroupHRDirectorApproval" && $stage != "BookFlightTicket" && $stage != "approved" && $stage != "handOver")
                LeaveStage::create([
                    'leave_id' => $leave->id,
                    'stage_name' => $stage,
                    'comments' => '',
                    'attachments' => '',
                    'extraInfo' => '',
                    'status' => 'pending',
                ]);
        }

        return redirect()->back()->with('success', 'Leave request submitted successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $employee = auth('employee')->user();
        $stringDateFromDatabase = $employee->joiningDate;
        $carbonDate = Carbon::parse($stringDateFromDatabase);
        $today = Carbon::now();
        $differenceInDays = $today->diffInDays($carbonDate);
        $leaves_types = LeaveType::where('employee_category', $employee->designation)->orWhere('employee_category', 'all')->where('joining_days', '<=', $differenceInDays)->get();
        $employees = Employee::where('company_id', $employee->company_id)->get();
        $managers_and_head_need_gm = ['Group HR Director'];
        $leave_type_options = ['Annual leave'];
        //Leave
        $leave = Leave::find($id);
        $states = $leave->states;
        $categorizedStages = $leave->hasStages->groupBy('stage_name');

        return view('employees.leaves.show', compact('leave', 'employee', 'leaves_types', 'employees', 'managers_and_head_need_gm', 'states', 'categorizedStages'));
    }

    function isDisplayable($actual_stage, $step_from_steps_list, $states)
    {
        $keys = array_keys($states);
        $actual_stage_index = array_search($actual_stage, $keys);
        $step_from_steps_list_index = array_search($step_from_steps_list, $keys);
        if ($actual_stage_index >= $step_from_steps_list_index) {
            return 1;
        } else {
            return 0;
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function getLeavePolicy()
    {
        return view('employees.leaves.policy');
    }

    public function getLeaveInstructions()
    {
        return view('employees.leaves.leaveInstructions');

    }
}

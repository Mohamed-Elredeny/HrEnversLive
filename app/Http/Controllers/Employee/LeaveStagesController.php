<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Models\Leave;
use App\Models\LeaveStage;
use Carbon\Carbon;
use Illuminate\Http\Request;

class LeaveStagesController extends Controller
{
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */

    /* "old" => [
         'RequiredAllocation' => $request->RequiredAllocation ?? 0,
         'ReplacementRequirement' => $request->ReplacementRequirement ?? $old_extra_info[1] ?? '',
         'HandoverPrepared' => $request->HandoverPrepared ?? $old_extra_info[2] ?? '',
         'LastSubmission' => Date('d-m-y h:i:s'),
         'leaveProceed' => $request->leaveProceed ?? $old_extra_info[4] ?? '',
         'leaveProceedGm' => $request->leaveProceedGm ?? $old_extra_info[5] ?? '',
         'BusinessProceed' => $request->BusinessProceed ?? $old_extra_info[6] ?? '',
         'resumptionDate' => $request->resumptionDate ?? $old_extra_info[7] ?? '',
         'FightSector' => $request->FightSector ?? $old_extra_info[8] ?? '',
         'LeaveEntitlement' => $request->LeaveEntitlement ?? $old_extra_info[9] ?? '',
         'FlightTicket' => $file_to_store1 ?? $old_extra_info[10] ?? '',
         'AccommodationKeys' => $request->AccommodationKeys ?? $old_extra_info[11] ?? '',
         'ApartmentCondition' => $request->ApartmentCondition ?? $old_extra_info[12] ?? '',
         'VehicleReturned' => $request->VehicleReturned ?? $old_extra_info[13] ?? '',
         'EquipmentHandOver' => $request->EquipmentHandOver ?? $old_extra_info[14] ?? '',
         'FuelReturned' => $request->FuelReturned ?? $old_extra_info[15] ?? '',
         'shapeEquipment' => $request->shapeEquipment ?? $old_extra_info[16] ?? '',
         'PPEItem' => $request->PPEItem ?? $old_extra_info[17] ?? '',
         'storeInventoryCleared' => $request->storeInventoryCleared ?? $old_extra_info[18] ?? '',
         'OutstandingDeductions' => $request->OutstandingDeductions ?? $old_extra_info[19] ?? '',
         'LapTopReturned' => $request->LapTopReturned ?? $old_extra_info[20] ?? '',
         'DesktopHandOver' => $request->DesktopHandOver ?? $old_extra_info[21] ?? '',
         'Mobile&SmCard' => $request['Mobile&SmCard'] ?? $old_extra_info[22] ?? '',
         'OthersText' => $request->OthersText ?? $old_extra_info[23] ?? '',
         'OthersDevices' => $request->OthersDevices ?? $old_extra_info[24] ?? '',
         'HrProceed' => $request->HrProceed ?? $old_extra_info[25] ?? '',
         'DirectorHrProceed' => $request->DirectorHrProceed ?? $old_extra_info[26] ?? '',
         'EmpRelationMobilePhone' => $request->EmpRelationMobilePhone ?? $old_extra_info[27] ?? '',
         'TicketEntitled' => $request->TicketEntitled ?? $old_extra_info[28] ?? '',

         'onHoldReasons' => $request->onHoldReasons ?? $old_extra_info[29] ?? '',
         'otherReasonsHoldText' => $request->otherReasonsHoldText ?? $old_extra_info[30] ?? '',

         'onRejectReasons' => $request->onRejectReasons ?? $old_extra_info[31] ?? '',
         'otherReasonsRejectText' => $request->otherReasonsRejectText ?? $old_extra_info[32] ?? '',
         'ConfirmationLeaveProceed' => $request->ConfirmationLeaveProceed ?? $old_extra_info[34] ?? '',
         'exitPermit' => $request->exitPermit ?? $old_extra_info[33] ?? ''
     ],*/
    public function store(Request $request)
    {
        //Status & Reason
        $status = $request->status;
        if ($status == 'rejected') {
            $status_reasons = $request->returnedReasons ?? [];

        } elseif ($status == 'rejected') {
            $status_reasons = $request->rejectedReasons ?? [];
        } else {
            $status_reasons = "";
        }
        $stage_id = $request->stageId;
        $comments = $request->stageComments;
        $stage = LeaveStage::find($stage_id);
        $employee_id = auth('employee')->user()->id;
        if (isset($request->signature)) {
            $fileName = $request->signature->getClientOriginalName();
            $file_to_store = time() . '_' . $fileName;
            $request->signature->move(public_path('assets/images/'), $file_to_store);
        } else {
            $file_to_store = $stage->attachments;
        }

        if (isset($request->FlightTicket)) {
            $fileName = $request->FlightTicket->getClientOriginalName();
            $file_to_store1 = time() . '_' . $fileName;
            $request->FlightTicket->move(public_path('assets/images/'), $file_to_store1);
        }
        $old_extra_info = explode('|', $stage['extraInfo']);
        $leave = new Leave();

        $extraInfo = [
            "next_approval_type" => $request["next_approval_type" . $stage_id],
            "next_approval_employee" => $request["next_approval_" . $stage_id] ?? "",
            "WorkHandoverReviewed" . $stage_id => $request["WorkHandoverReviewed" . $stage_id] ?? 0,
            "handoverProceed" . $stage_id => $request["handoverProceed" . $stage_id] ?? 0,
            "handoverRequired" . $stage_id => $request["handoverRequired" . $stage_id] ?? 0,
            "handoverReplacement" . $stage_id => $request["handoverReplacement" . $stage_id] ?? 0,
            //employee_relation_
            "last_resumption_date" => $request["employee_relation_last_resumption_date" . $stage_id] ?? null,
            "leave_taken_last_year" => $request["employee_relation_leave_taken_last_year" . $stage_id] ?? null,
            "leave_entitlement" => $request["employee_relation_leave_entitlement" . $stage_id] ?? null,
            "project_resumption" => $request["employee_relation_project_resumption" . $stage_id] ?? null,
            "flight_ticket_sector" => $request["employee_relation_flight_ticket_sector" . $stage_id] ?? null,
            "work_handover_attached" => $request["employee_relation_work_handover_attached" . $stage_id] ?? null,
            "exit_permit" => $request["employee_relation_exit_permit" . $stage_id] ?? null,
            "ticket_entitled" => $request["employee_relation_ticket_entitled" . $stage_id] ?? null,
            "return_quarantine" => $request["employee_relation_return_quarantine" . $stage_id] ?? null,
            "vaccinated" => $request["employee_relation_vaccinated" . $stage_id] ?? null,
            "clearance_required" => $request["employee_relation_clearance_required" . $stage_id] ?? null,
            "comments" => $request["employee_relation_comments" . $stage_id] ?? null,

        ];




        if ($stage->responsible_employee == null) {
            $stage->update([
                'responsible_employee' => $employee_id
            ]);
        }

        $stage->update([
            'comments' => $comments,
            'status' => $status,
            'attachments' => $file_to_store,
            'extraInfo' => json_encode($extraInfo),
        ]);

        if ($request->status == 'On Hold') {
            $stage->leave->update([
                'status' => $leave->getActiveStage()['previous_stage']
            ]);
        } else {
            $stage->leave->update([
                'status' => $leave->getActiveStage()['active']
            ]);
        }
        //next_approval_type
        //next_approval_
        //If stage handover create managers.
        if ($stage->stage_name == 'handOver') {
            $next_approval_type = $request['next_approval_type' . $stage->id];
            $next_approval = $request['next_approval_' . $stage->id];
            $LeaveStage = LeaveStage::where('leave_id', $stage->leave_id)->where('stage_name', $next_approval_type)->first();
            if($LeaveStage) {
                $LeaveStage->update([
                    'responsible_employee' => $next_approval
                ]);
            }
        }

        return redirect()->back()->with('success', 'Done Successfully');

    }

    /**
     * Display a listing of the resource.
     */
    public
    function getPreviousKey($currentKey)
    {
        $keys = array_keys($this->states);
        $index = array_search($currentKey, $keys);

        if ($index === false) {
            return null; // Key not found in the array
        } elseif ($index === 0) {
            return $keys[0]; // Return the first key if it's the first element
        } else {
            return $keys[$index - 1]; // Return the previous key
        }
    }

    /**
     * Display the specified resource.
     */
    public
    function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public
    function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public
    function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public
    function destroy(string $id)
    {
        //
    }
}

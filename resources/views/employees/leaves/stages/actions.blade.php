@if(( ((isset($stage->employee) && $stage->employee->id == $employee->id) || $employee->isHasPermission($stage->stage_name))  &&  !in_array($stage->status, ['approved', 'backToSender'])))
    <div class="button-Approval">
        <div class="btn btnApproval btnApprove" onclick="openApprovePopup({{ $stage->id }})">
            Approve
        </div>
        <div class="btn btnApproval btnReturn" onclick="openReturnPopup({{ $stage->id }})">
            Return
        </div>
        <div class="btn btnApproval btnReject" onclick="openRejectPopup({{ $stage->id }})">
            Reject
        </div>
    </div>
@endif
<div id="approve-popup-{{ $stage->id }}" class="overlayPopupOverlay hidden">
    <div class="popupPolicy popupApprove">
        <h2>Are you sure you want to approve this request?</h2>
        <div class="w-100 d-flex justify-content-end">
            <button class="btn btnClose btnYes mt-3" type="submit" value="approved" name="status">YES</button>
        </div>
    </div>
</div>
<div id="return-popup-{{ $stage->id }}" class="overlayPopupOverlay hidden">
    <div class="popupPolicy popupReturn">
        <h2>Hold Leave Reasons</h2>
        <div class="textSection">
            <p class="titlePolicy">Here are 6 common reasons for leave cancellation, which can serve as guidelines
                for employees:</p>
        </div>
        <div class="FormboxReturnDan FormboxReturnDan FirstReturnDan">
            <div class="form-group">
                <input type="checkbox" name="returnedReasons[]" value=" Urgent Business Needs" id="ReturnOne">
                <label for="ReturnOne">
                    Urgent Business Needs: When unexpected work requirements or deadlines necessitate the employee's
                    presence at work.
                </label>
            </div>
            <div class="form-group">
                <input type="checkbox" name="returnedReasons[]" value="Handover Not Completed" id="ReturnTwo">
                <label for="ReturnTwo">
                    Handover Not Completed: When the employee has not properly handed over their responsibilities
                    and tasks to a colleague before taking leave.
                </label>
            </div>
            <div class="form-group">
                <input type="checkbox" name="returnedReasons[]" value="Priority" id="ReturnThree">
                <label for="ReturnThree">
                    Priority: If multiple leave requests overlap, managers may prioritize based on departmental
                    needs.
                </label>
            </div>
            <div class="form-group">
                <input type="checkbox" name="returnedReasons[]" value="Project Changes" id="ReturnFour">
                <label for="ReturnFour">
                    Project Changes: When abrupt changes in project timelines or scope impact planned leave.
                </label>
            </div>
            <div class="form-group">
                <input type="checkbox" name="returnedReasons[]" value="Clearance Not Completed" id="ReturnFive">
                <label for="ReturnFive">
                    Clearance Not Completed: When required clearance processes or tasks associated with the leave
                    have not been finished by the employee.
                </label>
            </div>
            <div class="form-group">
                <input type="checkbox" name="returnedReasons[]" value="Policy Violations" id="ReturnSix">
                <label for="ReturnSix">
                    Policy Violations: When the leave request doesn't align with company leave policies, such as
                    insufficient notice or exceeding allowed balances.
                </label>
            </div>
        </div>
        <div class="reasonSpecify">
            <div class="titleSpecify">
                <p>
                    Other Reasons: <span>(Specify)</span>
                </p>
            </div>
            <textarea name="returnedReasons[]" id="areaReasonSpecifyLeave"
                      placeholder="Type Other Reason"></textarea>
        </div>
        <div class="w-100 d-flex">
            <button id="return-close-popup" class="btn btnClose btnReturn mx-auto mt-3" value="returned" name="status">
                Back to Sender
            </button>
        </div>
    </div>
</div>
<div id="Reject-popup-{{ $stage->id }}" class="overlayPopupOverlay hidden">
    <div class="popupPolicy popupReturn">
        <h2>Reject Leave Reasons</h2>
        <div class="textSection">
            <p class="titlePolicy">Here are 8 common reasons for leave cancellation, which can serve as guidelines
                for employees:</p>
        </div>
        <div class="FormboxReturnDan FormboxRejectDan FirstReturnDan">
            <div class="form-group">
                <input type="checkbox" name="rejectedReasons[]" value="Urgent Business Needs" id="RejectOne">
                <label for="RejectOne">
                    Urgent Business Needs: When unexpected work requirements or deadlines necessitate the employee's
                    presence at work.
                </label>
            </div>
            <div class="form-group">
                <input type="checkbox" name="rejectedReasons[]" value="Incorrect Manager Approval" id="RejectTwo">
                <label for="RejectTwo">
                    Incorrect Manager Approval: If the Leave was not approved or authorized by the responsible
                    manager.
                </label>
            </div>
            <div class="form-group">
                <input type="checkbox" name="rejectedReasons[]" value="Handover Not Completed" id="RejectThree">
                <label for="RejectThree">
                    Handover Not Completed: When the employee has not properly handed over their responsibilities
                    and tasks to a colleague before taking lecive.
                </label>
            </div>
            <div class="form-group">
                <input type="checkbox" name="rejectedReasons[]" value="Incomplete Clearance" id="RejectFour">
                <label for="RejectFour">
                    Incomplete Clearance: If the required clearance with the leave is not completed or missed by the
                    employee.
                </label>
            </div>
            <div class="form-group">
                <input type="checkbox" name="rejectedReasons[]" value="Employee Agreement" id="RejectFive">
                <label for="RejectFive">
                    Employee Agreement: If the employee voluntarily agrees to cancel or modify their approved leave.
                </label>
            </div>
            <div class="form-group">
                <input type="checkbox" name="rejectedReasons[]" value="Staffing Shortages" id="RejectSix">
                <label for="RejectSix">
                    Staffing Shortages: If granting leave would result in insufficient staff levels, disrupting
                    operations.
                </label>
            </div>
            <div class="form-group">
                <input type="checkbox" name="rejectedReasons[]" value="Policy Violations" id="RejectSeven">
                <label for="RejectSeven">
                    Policy Violations: When the leave request cloesn't align with company leave policies, such as
                    insufficient notice or exceeding allowed balances.
                </label>
            </div>
            <div class="form-group">
                <input type="checkbox" name="rejectedReasons[]" value="LegalRegulatory Requirements" id="RejectEight">
                <label for="RejectEight">
                    Legal/Regulatory Requirements: When legal or regulatory mandates demand the employee's
                    availability.
                </label>
            </div>
        </div>
        <div class="reasonSpecify">
            <div class="titleSpecify">
                <p>
                    Other Reasons: <span>(Specify)</span>
                </p>
            </div>
            <textarea class="comments" name="rejectedReasons[]" id="areaReasonSpecifyLeave"
                      placeholder="Type Other Reason"></textarea>
        </div>
        <div class="w-100 d-flex">
            <button id="Reject-close-popup" class="btn btnClose btnReject mx-auto mt-3" value="rejected" name="status">
                Reject
            </button>
        </div>
    </div>
</div>

<script>
    function openApprovePopup(stageId) {
        document.getElementById(`approve-popup-${stageId}`).classList.remove('hidden');
    }

    function openReturnPopup(stageId) {
        document.getElementById(`return-popup-${stageId}`).classList.remove('hidden');
    }

    function openRejectPopup(stageId) {
        document.getElementById(`Reject-popup-${stageId}`).classList.remove('hidden');
    }

    document.addEventListener('click', function (event) {
        if (event.target.classList.contains('overlayPopupOverlay')) {
            event.target.classList.add('hidden');
        }
    });
</script>

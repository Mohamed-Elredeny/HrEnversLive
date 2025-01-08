<style>
    .btnReturn:disabled {
        opacity: 0.5;
        pointer-events: none;
    }

    .btnReturn {
        opacity: 1;
        pointer-events: auto;
    }
</style>

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
            <p class="titlePolicy">Here are 6 common reasons for leave cancellation, which can serve as guidelines for
                employees:</p>
        </div>
        <div class="FormboxReturnDan FirstReturnDan">
            <div class="form-group">
                <label for="ReturnOne-{{ $stage->id }}">
                    <input type="checkbox" name="returnedReasons[]" value="Urgent Business Needs"
                           id="ReturnOne-{{ $stage->id }}">
                    Urgent Business Needs: When unexpected work requirements or deadlines necessitate the employee's
                    presence at work.
                </label>
            </div>
            <div class="form-group">
                <label for="ReturnTwo-{{ $stage->id }}">
                    <input type="checkbox" name="returnedReasons[]" value="Handover Not Completed"
                           id="ReturnTwo-{{ $stage->id }}">
                    Handover Not Completed: When the employee has not properly handed over their responsibilities and
                    tasks to a colleague before taking leave.
                </label>
            </div>
            <div class="form-group">
                <label for="ReturnThree-{{ $stage->id }}">
                    <input type="checkbox" name="returnedReasons[]" value="Priority" id="ReturnThree-{{ $stage->id }}">
                    Priority: If multiple leave requests overlap, managers may prioritize based on departmental needs.
                </label>
            </div>
            <div class="form-group">
                <label for="ReturnFour-{{ $stage->id }}">
                    <input type="checkbox" name="returnedReasons[]" value="Project Changes"
                           id="ReturnFour-{{ $stage->id }}">
                    Project Changes: When abrupt changes in project timelines or scope impact planned leave.
                </label>
            </div>
            <div class="form-group">
                <label for="ReturnFive-{{ $stage->id }}">
                    <input type="checkbox" name="returnedReasons[]" value="Clearance Not Completed"
                           id="ReturnFive-{{ $stage->id }}">
                    Clearance Not Completed: When required clearance processes or tasks associated with the leave have
                    not been finished by the employee.
                </label>
            </div>
            <div class="form-group">
                <label for="ReturnSix-{{ $stage->id }}">
                    <input type="checkbox" name="returnedReasons[]" value="Policy Violations"
                           id="ReturnSix-{{ $stage->id }}">
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
            <textarea id="areaReasonSpecifyLeave-{{ $stage->id }}" placeholder="Type Other Reason" name="returnedReasons[]" ></textarea>
        </div>

        <div class="w-100 d-flex">
            <button type="submit" id="return-button-{{ $stage->id }}" class="btn mx-auto mt-3"  value="rejected" name="backToSender"
                    >Back to Sender
            </button>
        </div>
    </div>
</div>

<div id="Reject-popup-{{ $stage->id }}" class="overlayPopupOverlay hidden">
    <div class="popupPolicy popupReturn">
        <h2>Reject Leave Reasons</h2>
        <div class="textSection">
            <p class="titlePolicy">Here are 8 common reasons for leave cancellation, which can serve as guidelines for
                employees:</p>
        </div>
        <div class="FormboxReturnDan FormboxRejectDan FirstReturnDan">
            <div class="form-group">
                <label for="RejectOne-{{ $stage->id }}">
                    <input type="checkbox" name="rejectedReasons[]" value="Urgent Business Needs"
                           id="RejectOne-{{ $stage->id }}">
                    Urgent Business Needs: When unexpected work requirements or deadlines necessitate the employee's
                    presence at work.
                </label>
            </div>
            <div class="form-group">
                <label for="RejectTwo-{{ $stage->id }}">
                    <input type="checkbox" name="rejectedReasons[]" value="Incorrect Manager Approval"
                           id="RejectTwo-{{ $stage->id }}">
                    Incorrect Manager Approval: If the Leave was not approved or authorized by the responsible manager.
                </label>
            </div>
            <div class="form-group">
                <label for="RejectThree-{{ $stage->id }}">
                    <input type="checkbox" name="rejectedReasons[]" value="Handover Not Completed"
                           id="RejectThree-{{ $stage->id }}">
                    Handover Not Completed: When the employee has not properly handed over their responsibilities and
                    tasks to a colleague before taking leave.
                </label>
            </div>
            <div class="form-group">
                <label for="RejectFour-{{ $stage->id }}">
                    <input type="checkbox" name="rejectedReasons[]" value="Incomplete Clearance"
                           id="RejectFour-{{ $stage->id }}">
                    Incomplete Clearance: If the required clearance with the leave is not completed or missed by the
                    employee.
                </label>
            </div>
            <div class="form-group">
                <label for="RejectFive-{{ $stage->id }}">
                    <input type="checkbox" name="rejectedReasons[]" value="Employee Agreement"
                           id="RejectFive-{{ $stage->id }}">
                    Employee Agreement: If the employee voluntarily agrees to cancel or modify their approved leave.
                </label>
            </div>
            <div class="form-group">
                <label for="RejectSix-{{ $stage->id }}">
                    <input type="checkbox" name="rejectedReasons[]" value="Staffing Shortages"
                           id="RejectSix-{{ $stage->id }}">
                    Staffing Shortages: If granting leave would result in insufficient staff levels, disrupting
                    operations.
                </label>
            </div>
            <div class="form-group">
                <label for="RejectSeven-{{ $stage->id }}">
                    <input type="checkbox" name="rejectedReasons[]" value="Policy Violations"
                           id="RejectSeven-{{ $stage->id }}">
                    Policy Violations: When the leave request doesn't align with company leave policies, such as
                    insufficient notice or exceeding allowed balances.
                </label>
            </div>
            <div class="form-group">
                <label for="RejectEight-{{ $stage->id }}">
                    <input type="checkbox" name="rejectedReasons[]" value="LegalRegulatory Requirements"
                           id="RejectEight-{{ $stage->id }}">
                    Legal/Regulatory Requirements: When legal or regulatory mandates demand the employee's availability.
                </label>
            </div>
        </div>
        <div class="reasonSpecify">
            <div class="titleSpecify">
                <p>Other Reasons: <span>(Specify)</span></p>
            </div>
            <textarea class="comments" name="rejectedReasons[]" id="areaReasonSpecifyLeave-{{ $stage->id }}"
                      placeholder="Type Other Reason"></textarea>
        </div>
        <div class="w-100 d-flex">
            <button type="submit" id="Reject-close-popup-{{ $stage->id }}" class="btn mx-auto mt-3"
                    value="rejected" name="status">Reject
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

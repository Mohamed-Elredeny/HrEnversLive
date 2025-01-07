<div class="col-12 col-md-4">
    <div
        class="review-section review-section-gray mb-2 review-section-gray-row d-flex flex-row justify-content-between align-items-center">
        <label for="work-handover">Proceed For Leave</label>
        <div class="buttons buttonsPrint d-flex justify-content-center align-items-center">
            <label class="radio-label">
                <input type="radio" name="handoverProceed{{$stage->id}}" class="yes" value="yes"
                       {{ isset($stageExtra->{"handoverProceed" . $stage->id}) && $stageExtra->{"handoverProceed" . $stage->id} == "yes" ? 'checked' : '' }}
                       @if(isset($stage->employee) && ($stage->employee->id != $employee->id) || in_array($stage->status, ['approved', 'backToSender'])) disabled @endif>
                <span>YES</span>
            </label>
            <label class="radio-label">
                <input type="radio" name="handoverProceed{{$stage->id}}" class="no" value="no"
                       {{ isset($stageExtra->{"handoverProceed" . $stage->id}) && $stageExtra->{"handoverProceed" . $stage->id} == "no" ? 'checked' : '' }}
                       @if(isset($stage->employee) &&  ($stage->employee->id != $employee->id) || in_array($stage->status, ['approved', 'backToSender'])) disabled @endif>
                <span>NO</span>
            </label>
        </div>
    </div>
</div>

<div class="col-12 col-md-4">
    <div
        class="review-section review-section-gray mb-2 review-section-gray-row d-flex flex-row justify-content-between align-items-center">
        <label for="work-handover">Required Back To Same Allocation</label>
        <div class="buttons buttonsPrint d-flex justify-content-center align-items-center">
            <label class="radio-label">
                <input type="radio" name="handoverRequired{{$stage->id}}" class="yes" value="yes"
                       {{ isset($stageExtra->{"handoverRequired" . $stage->id}) && $stageExtra->{"handoverRequired" . $stage->id} == "yes" ? 'checked' : '' }}
                       @if((isset($stage->employee) && $stage->employee->id != $employee->id) || in_array($stage->status, ['approved', 'backToSender'])) disabled @endif>
                <span>YES</span>
            </label>
            <label class="radio-label">
                <input type="radio" name="handoverRequired{{$stage->id}}" class="na" value="na"
                       {{ isset($stageExtra->{"handoverRequired" . $stage->id}) && $stageExtra->{"handoverRequired" . $stage->id} == "na" ? 'checked' : '' }}
                       @if((isset($stage->employee) && $stage->employee->id != $employee->id) || in_array($stage->status, ['approved', 'backToSender'])) disabled @endif>
                <span>N/A</span>
            </label>
        </div>
    </div>
</div>

<div class="col-12 col-md-4">
    <div
        class="review-section review-section-gray mb-2 review-section-gray-row d-flex flex-row justify-content-between align-items-center">
        <label for="work-handover">Replacement Requirement</label>
        <div class="buttons buttonsPrint d-flex justify-content-center align-items-center">
            <label class="radio-label">
                <input type="radio" name="handoverReplacement{{$stage->id}}" class="yes" value="yes"
                       {{ isset($stageExtra->{"handoverReplacement" . $stage->id}) && $stageExtra->{"handoverReplacement" . $stage->id} == "yes" ? 'checked' : '' }}
                       @if(isset($stage->employee) && ($stage->employee->id != $employee->id) || in_array($stage->status, ['approved', 'backToSender'])) disabled @endif>
                <span>YES</span>
            </label>
            <label class="radio-label">
                <input type="radio" name="handoverReplacement{{$stage->id}}" class="na" value="na"
                       {{ isset($stageExtra->{"handoverReplacement" . $stage->id}) && $stageExtra->{"handoverReplacement" . $stage->id} == "na" ? 'checked' : '' }}
                       @if(isset($stage->employee) && ($stage->employee->id != $employee->id) || in_array($stage->status, ['approved', 'backToSender'])) disabled @endif>
                <span>N/A</span>
            </label>
        </div>
    </div>
</div>

<div class="col-12 col-md-6">
    <div class="comments-section mt-2 mt-md-0">
        <label class="mb-0 titelForPrintLabel" for="comments">Next Approval</label>
        <div class="approval-group">
            <div class="approval-section mt-0 approvalSection active">
                <div class="select-approval flex-column flex-md-row">
                        <span class="approvalBtn">
                            @if(isset($stageExtra->next_approval_type))
                                {{ $states[$stageExtra->next_approval_type] }}
                            @else
                                Select Approval
                            @endif
                            <div class="iconArrowDown d-inline ms-1">
                                <i style="transform: rotate(90deg);" class="fa-solid fa-arrow-right"></i>
                            </div>
                        </span>
                    <div class="search">
                        <select id="{{ $stage->id }}" name="next_approval_{{ $stage->id }}" required
                                class="form-control"
                                @if((isset($stage->employee) && $stage->employee->id != $employee->id) || in_array($stage->status, ['approved', 'backToSender'])) disabled @endif>
                            @foreach($employees as $emp)
                                <option
                                    value="{{ $emp->id }}" {{ isset($stageExtra->next_approval_employee) && $stageExtra->next_approval_employee == $emp->id ? 'selected' : '' }}>
                                    {{ $emp->empCode . " - " . $emp->empName }}
                                </option>
                            @endforeach
                        </select>
                        <button class="search-icon"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </div>
                </div>
            </div>
            @include('employees.leaves.stages.approvalList')
        </div>
    </div>
</div>

<div class="col-12 col-md-6">
    <div class="comments-section mt-2 mt-md-0">
        <textarea class="comments" placeholder="Direct Supervisor Comments"
                  @if(isset($stage->employee) && ($stage->employee->id != $employee->id) || in_array($stage->status, ['approved', 'backToSender'])) disabled @endif></textarea>
    </div>
</div>

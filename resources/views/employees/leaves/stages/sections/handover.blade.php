@if($main_handover == 1)
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
                            <select id="{{ $stage->id }}" name="next_approval_{{ $stage->id }}" required class="form-control"
                                    @if(($stage->employee->id != $employee->id) || in_array($stage->status, ['approved', 'returned'])) disabled @endif>
                                @foreach($employees as $emp)
                                    <option value="{{ $emp->id }}" {{ isset($stageExtra->next_approval_employee) && $stageExtra->next_approval_employee == $emp->id ? 'selected' : '' }}>
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
@endif

<div class="col-12 col-md-6">
    <div class="DownloadAtt mb-4 d-flex justify-content-between align-items-center">
        <div class="review-section flex-grow-1 d-flex justify-content-between align-items-center">
            <label for="work-handover">Work Handover Reviewed</label>
            <div class="buttons buttonsPrint d-flex justify-content-center align-items-center">
                <label class="radio-label">
                    <input type="radio" name="WorkHandoverReviewed{{ $stage->id }}" class="no" value="0" required
                           @if(($stage->employee->id != $employee->id) || in_array($stage->status, ['approved', 'returned'])) disabled @endif
                        {{ isset($stageExtra->{"WorkHandoverReviewed" . $stage->id}) && $stageExtra->{"WorkHandoverReviewed" . $stage->id} == "0" ? 'checked' : '' }}>
                    <span>NO</span>
                </label>
                <label class="radio-label">
                    <input type="radio" name="WorkHandoverReviewed{{ $stage->id }}" class="yes" value="1" required
                           @if(($stage->employee->id != $employee->id) || in_array($stage->status, ['approved', 'returned'])) disabled @endif
                        {{ isset($stageExtra->{"WorkHandoverReviewed" . $stage->id}) && $stageExtra->{"WorkHandoverReviewed" . $stage->id} == "1" ? 'checked' : '' }}>
                    <span>YES</span>
                </label>
                <label class="radio-label">
                    <input type="radio" name="WorkHandoverReviewed{{ $stage->id }}" class="na" value="na" required
                           @if(($stage->employee->id != $employee->id) || in_array($stage->status, ['approved', 'returned'])) disabled @endif
                        {{ isset($stageExtra->{"WorkHandoverReviewed" . $stage->id}) && $stageExtra->{"WorkHandoverReviewed" . $stage->id} == "na" ? 'checked' : '' }}>
                    <span>N/A</span>
                </label>
            </div>
        </div>
        <a target="_blank" href="{{ asset('assets/images/' . ($leave_extraInfo->attachments->handover_leave_attachments ?? '')) }}" download="handover_leave_attachments.pdf" class="iconDownload ms-0 ms-sm-4">
            <i class="fa-solid fa-download"></i>
        </a>
    </div>
</div>

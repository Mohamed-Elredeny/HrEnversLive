<?php
$index = array_search($stage->stage_name, array_keys($states));

if ($index !== false) {
    // Slice the array to get elements after 'handover'
    $filteredArray = array_slice(array_keys($states), $index + 1);
} else {
    // If 'handover' is not found, return the original array or an empty array
    $filteredArray = array_keys($states); // or $filteredArray = [];
}
?>
@if((isset($stage->employee) && $stage->employee->id != $employee->id) || in_array($stage->status, ['approved', 'backToSender']) == false)
    <div class="approval-options approvalOptions">
                    <span class="spanTitle">
                        Choose Next Approval
                        <p class="mb-0">
                            "Please note that you will select the name of the next approver, who will then select the subsequent approver."
                        </p>
                        <p>
                            For positions of Managers and above, approval must be obtained from the General Manager.
                        </p>
                    </span>
        <div id="approvalForm">
            <div class="options">
                <div class="row">

                    @for($j=1;$j<=5;$j++)
                        <label class="col-6 col-md-4 @if(isset($stageExtra->next_approval_type) && $stageExtra->next_approval_type == array_keys($states)[$j]) active
                               @endif">
                            <input
                                @if((isset($stage->employee) && $stage->employee->id != $employee->id) || in_array($stage->status, ['approved', 'backToSender'])) disabled
                                @endif name="next_approval_type{{$stage->id}}" type="radio" required
                                @if(isset($stageExtra->next_approval_type) && $stageExtra->next_approval_type == array_keys($states)[$j]) checked
                                @endif value=" {{array_keys($states)[$j]}}">
                            {{array_values($states)[$j]}}

                            <div class="img-fluid"><img
                                    class="gray_Evaluated"
                                    src="{{asset('assets/images/sign-in/Evaluated@3x.png')}}"
                                    alt="Evaluated"></div>
                        </label>
                    @endfor


                    <label class="col-6 col-md-4 @if(isset($stageExtra->next_approval_type) && $stageExtra->next_approval_type == "N/A") active
                               @endif">
                        <input
                            @if((isset($stage->employee) && $stage->employee->id != $employee->id) || in_array($stage->status, ['approved', 'backToSender'])) disabled
                            @endif name="next_approval_type{{$stage->id}}" required type="radio" value="N/A"> N/A
                        <div class="img-fluid"><img
                                class="gray_Evaluated"
                                src="{{asset('assets/images/sign-in/Evaluated@3x.png')}}"
                                alt="Evaluated"></div>
                    </label>
                </div>
            </div>

        </div>
    </div>
@endif

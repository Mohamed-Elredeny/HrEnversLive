@php
    $isDisabled = ($stage->status == 'approved' || $stage->status == 'rejected') || $stage->responsible_employee == Auth::user()->id;
    $stageExtra = json_decode($stage->extraInfo);
@endphp

<button class="accordion-header d-flex justify-content-between align-items-center"
        onclick="toggleAccordion(this)">
    <!-- Left Section: Action and Status -->
    <div class="d-flex align-items-center">

        <div class="text-left">
            <h6 class="btn-danger mb-0 status-text">{{strtoupper($stage->status)}}</h6>
        </div>
    </div>

    <!-- Center Section: Images and Stage Info -->
    <div class="center-section d-flex justify-content-center align-items-center flex-grow-1">
        <!-- Middle Section: Images -->
        <div class="d-flex align-items-center">
            <img src="{{asset('assets/images/sign-in/Evaluated@3x.png')}}"
                 style="@if($stage->status === 'approved') display: block; @else display: none; @endif width: 25px;" alt="Approved">
            <img src="{{asset('assets/images/sign-in/Pending@3x.png')}}"
                 style="@if($stage->status === 'pending') display: block; @else display: none; @endif width: 25px;" alt="Pending">
            <img src="{{asset('assets/images/sign-in/Returned@3x.png')}}"
                 style="@if($stage->status === 'backToSender') display: block; @else display: none; @endif  width: 25px;" alt="backToSender">
        </div>

        <!-- Right Section: Stage Info -->
        <div class="manager d-flex align-items-center ms-3">
            {{ strtoupper($states[$stage->stage_name]) }} Stage
            <div class="mx-3 icon">
                <i class="fa-regular fa-clock"></i>
            </div>
            <p class="mb-0 nameEmployee">
                {{ $stage->employee->empName ?? '' }}
            </p>
        </div>
    </div>

</button>


<div class="accordion-content">
    <form action="{{route('employee.leavesStages.store')}}" method="POST">
        @csrf
        <div class="row">
            @if($stage->stage_name == 'handOver')
                @include('employees.leaves.stages.sections.handover')
            @elseif($stage->stage_name == 'ManagerApproval1' || $stage->stage_name == 'ManagerApproval2' || $stage->stage_name == 'ManagerApproval3' || $stage->stage_name == 'ManagerApproval4' || $stage->stage_name == 'ManagerApproval5')
                @include('employees.leaves.stages.sections.departmentApproval')
            @elseif($stage->stage_name == "EmployeeRelation")
                @include('employees.leaves.stages.sections.employeeRelation')
            @elseif($stage->stage_name =="HrApproval")
                @include('employees.leaves.stages.sections.hrApproval')
            @elseif($stage->stage_name =="ClearanceAccommodation")
                @include('employees.leaves.stages.sections.facilitiesDepartment')
            @elseif($stage->stage_name =="ClearancePlant")
                @include('employees.leaves.stages.sections.plantDepartment')
            @elseif($stage->stage_name =="ClearanceStoresMain")
                @include('employees.leaves.stages.sections.clearanceStoresMain')
            @elseif($stage->stage_name =="ClearanceStoresSite")
                @include('employees.leaves.stages.sections.clearanceStoresSite')
            @elseif($stage->stage_name =="ClearanceIT")
                @include('employees.leaves.stages.sections.itDepartment')
            @elseif($stage->stage_name =="ClearanceFinance")
                @include('employees.leaves.stages.sections.financeDepartment')
            @elseif($stage->stage_name =="FinalApprovalAdministration")
                @include('employees.leaves.stages.sections.finalApprovalAdministration')
            @elseif($stage->stage_name =="FinalApprovalHrFinal")
                @include('employees.leaves.stages.sections.finalApprovalHrFinal')
            @elseif($stage->stage_name =="FinalApprovalImmigration")
                @include('employees.leaves.stages.sections.finalApprovalImmigration')
            @endif
            <div class="col-12 ">
                <div class="comments-section">
                    <textarea @if(isset($stage->employee) &&  ($stage->employee->id != $employee->id) || in_array($stage->status, ['approved', 'backToSender'])) disabled @endif class="comments" placeholder="Comments" name="stageComments">{{$stage->comments}}</textarea>
                </div>
            </div>
        </div>
        <input type="hidden" name="stageId" value="{{$stage->id}}">
        @include('employees.leaves.stages.actions')

    </form>


</div>

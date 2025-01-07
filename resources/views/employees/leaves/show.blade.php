<?php
$leave_extraInfo = json_decode($leave->extraInfo);
$DepartmentApproval = true;
$HrDepartmentApproval = true;
$Clearance = true;
$FinalApproval = true;
$current_state = "1";
?>
@extends('layouts.employee')
@section('content')
    <style>
        /* Hide the dropdown arrow in Select2 */
        .select2-container--default .select2-selection--single .select2-selection__arrow {
            display: none;
        }

        /* Optional: Adjust padding to compensate for the missing arrow */
        .select2-container--default .select2-selection--single {
            padding-right: 10px; /* Adjust as needed */
        }

        #approval-container {
            margin-top: 15px;
        }

        .col-sm-6 {
            margin-bottom: 15px; /* Add space between rows if needed */
        }
    </style>
    <main>
        <article class="container">
            <section class="head">
                <div class="title">

                    <a href="{{route('employee.leaves.index')}}">
                        <span>Employee Leave Request</span>
                    </a>
                    <a>
                        <p>Manage Requests</p>
                    </a>
                    <span>|</span>
                </div>
                <div class="endHead Button_section">
                    <button class="print_button Print_Requests me-3">
                        <i class="fa-solid fa-print"></i>
                    </button>
                    <a href="index.blade.php" class="image">
                        <div class="img-fluid">
                            <img src="{{asset('assets/images/sign-in/Back@3x.png')}}" alt="back arrow">
                        </div>
                    </a>

                </div>
            </section>
            <section class="info_section mx-3 mt-5">
                <div class="row g-5 ">

                    <div class="content_Info col-12 ">
                        <div class="row g-3">
                            <div class="info_section_tap p-4  col-12">
                                <div class="info_section_content d-flex flex-column  align-item-center">
                                    <div class="row">

                                        <div class="infolist ">

                                            <div class="row">
                                                <div class="title textTitleEs">
                                                    <p>
                                                        Employee details
                                                    </p>
                                                </div>
                                                <div
                                                    class="image d-flex align-items-center flex-column justify-content-center col-4 col-md-2">
                                                    <div class="img-fluid ">
                                                        <img class="Personalphoto"
                                                             src="{{asset('assets/images/' . $employee->image)}}"
                                                             alt="Personal photo">
                                                    </div>
                                                    <div class=" mx-auto  mt-2  ">
                                                        <div class="text-center nameEmployee">
                                                            <h2>
                                                                <span class="d-block ">Leave Application</span>
                                                                {{$employee->empName}}
                                                            </h2>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-8 col-md-10">
                                                    <div class="row">
                                                        <div class="col-6 col-md-2">
                                                            <h2>
                                                                Emp No
                                                            </h2>
                                                            <p>
                                                                {{$employee->empCode}}
                                                            </p>
                                                        </div>
                                                        <div class="col-6 col-md-2">
                                                            <h2>
                                                                Designation
                                                            </h2>
                                                            <p>
                                                                {{$employee->designation ?? 'updateInfo'}}
                                                            </p>
                                                        </div>
                                                        <div class="col-6 col-md-2">
                                                            <h2>
                                                                Department ????????
                                                            </h2>
                                                            <p>
                                                                {{$employee->projectDepartmentName ?? 'updateInfo'}}
                                                            </p>
                                                        </div>
                                                        <div class="col-6 col-md-2">
                                                            <h2>
                                                                Year Of Evaluation
                                                            </h2>
                                                            <p>
                                                                {{Date('Y')}}
                                                            </p>
                                                        </div>
                                                        <div class="col-6 col-md-2">
                                                            <h2>
                                                                Project Number
                                                            </h2>
                                                            <p>
                                                                {{$employee->projectDepartmentNumber ?? 'updateInfo'}}
                                                            </p>
                                                        </div>
                                                        <div class="col-6 col-md-2">
                                                            <h2>
                                                                Project Name
                                                            </h2>
                                                            <p>
                                                                {{$employee->projectDepartmentName ?? 'updateInfo'}}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="infolist mt-1">
                                        <div class="row">
                                            <div class="title textTitleEs">
                                                <p>
                                                    Leave details
                                                </p>
                                            </div>
                                            <div class="col-12 col-md-4 ">
                                                <div class="row mx-auto info_section_tap_spi">
                                                    <div class="col-4 col-lg-3">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <h2>
                                                                    Leave Type
                                                                </h2>
                                                                <p>
                                                                    {{$leave->type->name}}
                                                                </p>
                                                            </div>
                                                            <div class="col-12 mt-1">
                                                                <div class="counter text-start">
                                                                        <span class="text-start text-black">
                                                                            Total Days
                                                                        </span>

                                                                    <div class="boxCounter tableboxCounter">
                                                                        <p class="mb-0 text-white">
                                                                            {{abs(round(strtotime($leave_extraInfo->to_date) - strtotime($leave_extraInfo->from_date) / 86400))}}
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-8 col-lg-9">
                                                        <div class=" mx-auto  ">
                                                            <div class="text-center  d-flex flex-column">

                                                                <p class="titelForPrintRequest">Your request is pending
                                                                    with</p>
                                                                <div
                                                                    class="manager  d-flex justify-content-center flex-column align-items-center">
                                                                    <button class="btn btnInfo titelForPrintRequest">
                                                                        Head Of Department Comments
                                                                    </button>
                                                                    <div class="icon">
                                                                        <i class="fa-regular fa-clock"></i>
                                                                    </div>
                                                                    <p class="nameEmployee managernameEmployee titelForPrintRequest">
                                                                        Ahmed Muhammed Elsayed
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-12 col-md-8 mt-2 mt-md-0 ">
                                                <div class="row">
                                                    <div class="col-6 col-md-3 col-lg-3">
                                                        <h2>
                                                            Visa Expiry
                                                        </h2>
                                                        <p>
                                                            19-12-2024
                                                        </p>
                                                    </div>
                                                    <div class="col-6 col-md-3 col-lg-3">
                                                        <h2>
                                                            Travel Date:
                                                        </h2>
                                                        <p>
                                                            19-12-2024
                                                        </p>
                                                    </div>
                                                    <div class="col-6 col-md-3 col-lg-3">
                                                        <h2>
                                                            Arrival Date
                                                        </h2>
                                                        <p>
                                                            19-12-2024
                                                        </p>
                                                    </div>
                                                    <div class="col-6 col-md-3 col-lg-3">
                                                        <h2>
                                                            Submission Date
                                                        </h2>
                                                        <p>
                                                            19-12-2024
                                                        </p>
                                                    </div>
                                                    <div class="col-6 col-md-3 col-lg-3">
                                                        <h2>
                                                            Phone Number
                                                        </h2>
                                                        <p>
                                                            0111233346
                                                        </p>
                                                    </div>
                                                    <div class="col-6 col-md-3 col-lg-3">
                                                        <h2>
                                                            Reasons
                                                        </h2>
                                                        <p>
                                                            Leave Type
                                                        </p>
                                                    </div>
                                                    <div class="col-6 col-md-3 col-lg-3">
                                                        <h2>
                                                            Last Resumption Date
                                                        </h2>
                                                        <p>
                                                            19-12-2024
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>


                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </section>

            <section class="LeaveTap_section">
                <div class="accordion">
                    <?php $main_handover = 1; ?>
                    @foreach(array_keys($states) as $state)
                        @if($leave->isShowable($state))
                            @if(isset($categorizedStages[$state]) && count($categorizedStages[$state]) >0)
                                @foreach($categorizedStages[$state] as $stage)
                                    @if(Str::contains($state, 'ManagerApproval') && $DepartmentApproval)
                                        <div class="accordion-item-static">
                                            <div class="accordion-header-static">
                                                Department approval
                                                    <?php $DepartmentApproval = false; ?>
                                            </div>
                                        </div>
                                    @endif
                                    @if((Str::contains($state, 'EmployeeRelation') || Str::contains($state, 'HrApproval')) && $HrDepartmentApproval)
                                        <div class="accordion-item-static">
                                            <div class="accordion-header-static">
                                                HR Department approval
                                                    <?php $HrDepartmentApproval = false; ?>
                                            </div>
                                        </div>
                                    @endif
                                    @if(Str::contains($state, 'Clearance') && $Clearance)
                                        <div class="accordion-item-static">
                                            <div class="accordion-header-static">
                                                Clearance
                                                    <?php $Clearance = false; ?>
                                            </div>
                                        </div>
                                    @endif
                                    @if(Str::contains($state, 'FinalApproval') && $FinalApproval)
                                        <div class="accordion-item-static">
                                            <div class="accordion-header-static">
                                                Final Approval
                                                    <?php $FinalApproval = false; ?>
                                            </div>
                                        </div>
                                    @endif
                                    <div class="accordion-item " onclick="toggleAccordionHeader(this)">
                                        @include('employees.leaves.stages.base')
                                    </div>
                                        <?php $main_handover = 0; ?>
                                @endforeach
                            @endif
                        @endif

                    @endforeach

                </div>

            </section>
        </article>
    </main>

@endsection
@section('scripts')

    <script src="{{ asset('assets/js/leaves/NewLeaveRequests.js') }}"></script>
    <script src="{{ asset('assets/js/leaves/LeaveRequests.js') }}"></script>
    <script src="{{ asset('assets/js/leaves/ManageRequests.js') }}"></script>
    <script src="{{ asset('assets/js/leaves/Leave_dashboard.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- SweetAlert2 JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.1/dist/sweetalert2.min.js"></script>

    <script>

        function ApproveBtn() {
            Swal.fire({
                title: 'Are you sure , you want to approve this request ?',
                icon: 'success',
                confirmButtonText: 'YES'
            });
        }


    </script>

@endsection

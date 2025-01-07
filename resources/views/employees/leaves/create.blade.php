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
                        <span>My Leave Request</span>
                    </a>
                    <a>
                        <p>New Application</p>
                    </a>
                    <span>|</span>
                </div>
                <a href="{{route('employee.dashboard')}}" class="image">
                    <div class="img-fluid">
                        <img src="{{asset('assets/images/sign-in/Back@3x.png')}}" alt="back arrow">
                    </div>
                </a>
            </section>
            <section class="statistics labelSection">
                <p>Available Leaves</p>
            </section>
            <section class="statistics_Content ">
                <div class="table_wrapper">
                    <table class="table">
                        <thead>
                        <tr>
                            <th><b>Leave Type </b></th>
                            <th><b>Total Leaves</b></th>
                            <th><b>Available Leave </b></th>
                            <th><b>Remain </b></th>
                            <th><b>Used Leave </b></th>
                            <th><b>Pending Leave</b></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($leaves_types as $leave)
                            <tr>
                                <td style="width: 16.6%;">{{$leave->name}}</td>
                                <td style="width: 16.6%;">{{$leave->quantity}}</td>
                                <td style="width: 16.6%;">{{$leave->getEmpLeaves($result)['statistics'][$leave->id]['available']}}</td>
                                <td style="width: 16.6%;">{{$leave->getEmpLeaves($result)['statistics'][$leave->id]['remain']}}</td>
                                <td style="width: 16.6%;">{{$leave->getEmpLeaves($result)['statistics'][$leave->id]['approved']}}</td>
                                <td style="width: 16.6%;">{{$leave->getEmpLeaves($result)['statistics'][$leave->id]['pending']}}</td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </section>
            <section class="LeaveTap_section">
                <div class="accordion row ">
                    <div class="col-12">
                        <form id="MainForm" class="row" action="{{route('employee.leaves.store')}}" method="POST" enctype="multipart/form-data" ">
                            @csrf
                            <div class="accordion-item col-12">
                                <div class="accordion-content leaveReq open">
                                    <div class="approval-options approvalOptions active">
                                        <div class="headNewLeave d-flex align-items-center justify-content-between">
                                            <span
                                                class="spanTitle bg-transparent mb-0">Please, Select Leave Type:</span>
                                        </div>
                                        <div class="options options1fr">
                                            <div class="row gy-2">
                                                <!-- Leave Types -->
                                                @foreach($leaves_types as $type)
                                                    @if($type->name !== "Annual leave")
                                                    <div class="col-6 col-md-3 col-lg-2">
                                                        <label class="w-100">
                                                            <input type="radio" name="leaveType" value="{{$type->name}}"
                                                                   id="{{$type->name}}">
                                                            {{$type->name}}
                                                            <div class="img-fluid">
                                                                <img class="gray_Evaluated"
                                                                     src="{{asset('assets/images/sign-in/Evaluated@3x.png')}}"
                                                                     alt="Evaluated">
                                                            </div>
                                                        </label>
                                                    </div>
                                                    @endif

                                                @endforeach

                                            </div>
                                            <hr>
                                            <!-- Annual Leave and Nested Options -->
                                            <div class="row">
                                                <div class="col-6 col-md-3 col-lg-2">
                                                    <label>
                                                        <input type="radio" name="leaveType" value="Annual Leave"
                                                               id="annualLeave">
                                                        Annual Leave
                                                        <div class="img-fluid">
                                                            <img class="gray_Evaluated"
                                                                 src="{{asset('assets/images/sign-in/Evaluated@3x.png')}}"
                                                                 alt="Evaluated">
                                                        </div>
                                                    </label>
                                                </div>

                                                <div style="display: none;" class="Annual col-6 col-md-3 col-lg-2"
                                                     id="insideOption">
                                                    <label>
                                                        <input type="radio" name="annualType" value="Inside Qatar">
                                                        Inside Qatar
                                                    </label>
                                                </div>

                                                <div style="display: none;" class="Annual col-6 col-md-3 col-lg-2"
                                                     id="outsideOption">
                                                    <label>
                                                        <input type="radio" name="annualType" value="Outside Qatar">
                                                        Outside Qatar
                                                    </label>
                                                </div>

                                                <div class="AnnualOut col-6 col-md-3 col-lg-2" id="purchaseTicketOption"
                                                     style="display: none;">
                                                    <label>
                                                        <input type="radio" name="ticketOption" value="Purchase Ticket"
                                                               id="purchaseTicket">
                                                        I Will Purchase my ticket
                                                    </label>
                                                </div>

                                                <div class="AnnualOut col-6 col-md-3 col-lg-2" id="companyArrangeOption"
                                                     style="display: none;">
                                                    <label>
                                                        <input type="radio" name="ticketOption" value="Request Company"
                                                               id="requestCompany">
                                                        Request Company to arrange your ticket
                                                    </label>
                                                </div>

                                                <!-- New input for the date -->
                                                <div class="AnnualOut col-6 col-md-3 col-lg-4 labelFont" id="dateInput"
                                                     style="display: none;">
                                                   Select Date:
                                                    <input type="date" class="form-control" placeholder=""
                                                           name="requestCompanyDate" id="ticketDate">



                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="accordion-item row ">
                                    <div
                                        class="accordion-content accordion-content-border col-12 col-md-5 filter_section my-0 leaveReqPadd open">
                                        <div class="row mx-auto mb-1">
                                            <div class="col-10 col-md-8 col-lg-10">
                                                <div class="row">
                                                    <div class="col-12 comments-section col-md-6">
                                                        <label class="ms-1" for="FromDate">From</label>
                                                        <input type="date" class="form-control" placeholder=""
                                                               name="FromDate" id="FromDate">
                                                    </div>
                                                    <div class="col-12 comments-section col-md-6 mt-3 mt-md-0">
                                                        <label class="ms-1" for="ToDate">To</label>
                                                        <input type="date" class="form-control inputTwo" placeholder=""
                                                               name="ToDate" id="ToDate">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-2 col-md-4 col-lg-2">
                                                <div class="counter">
                                                    <span>Total Days</span>
                                                    <div class="boxCounter">
                                                        <p id="conuterNum">Zero</p>
                                                        <input type="hidden" name="days">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="comments-section">
                                            <label for="comments">Phone number</label>
                                            <input class="comments" name="phoneNumber"/>
                                        </div>

                                        <div class="comments-section">
                                            <label for="comments">Comments</label>
                                            <textarea class="comments" placeholder="Comments" name="reasons"></textarea>
                                        </div>
                                        <div class="comments-section   upload-section">
                                            <label for="Upload Signature">Upload Attachment</label>
                                            <label for="signature-upload"
                                                   class="signature-upload-title point p-2 w-100  d-flex justify-content-center align-items-center ">
                                                <div class="d-flex iconUploadText flex-column align-items-center ">
                                                    <div class="iconUpload d-flex align-items-center">
                                                        <span>Upload Attachment</span>
                                                        <div class="iconUploadDis">
                                                            <div class="divuploa">
                                                                <i class="fas fa-upload ms-2"></i>
                                                            </div>
                                                            <div class="divcheck" style="display: none;">
                                                                <i class="fa-solid fa-circle-check ms-2"
                                                                   style="color: #42b26b;"></i>
                                                            </div>
                                                        </div>
                                                        <input type="file" id="signature-upload" name="normal_leave_attachments[]"
                                                               class="d-none file-input" multiple>
                                                    </div>
                                                    <p id="file-name" class="mb-0 file-name">No file selected</p>
                                                </div>
                                            </label>
                                        </div>


                                    </div>
                                    <div class="accordion-content col-12 col-md-7 leaveReqPadd open">
                                        <div class="d-flex justify-content-between align-items-center">

                                            <div
                                                class="titleAccordion  d-flex justify-content-start align-items-center">
                                                <h3 class="mb-0 HandOverTitle">
                                                    Handover
                                                </h3>
                                                <div class="icon ms-2 " id="add-approval">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </div>
                                            </div>

                                            <div class="comments-section ms-0 ms-sm-4 upload-section">
                                                <label for="signature-down"
                                                       class="signature-upload-title point p-2 w-100  d-flex justify-content-center align-items-center ">
                                                    <div class="d-flex iconUploadText flex-column align-items-center ">
                                                        <div class="iconUpload d-flex align-items-center">
                                                            <div class="iconDownloadDis">
                                                                <div class="divdownloa">
                                                                    <i class="fas fa-upload me-2"></i>
                                                                </div>
                                                                <div class="divdowncheck" style="display: none;">
                                                                    <i class="fa-solid fa-circle-check me-2"
                                                                       style="color: #42b26b;"></i>
                                                                </div>
                                                            </div>
                                                            <span>Handover Documents</span>

                                                            <input type="file" id="signature-down" name="handover_leave_attachments[]"
                                                                   class="d-none file-input" multiple>
                                                        </div>
                                                        <p id="file-name-down" class="mb-0 file-name">No file
                                                            selected</p>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="approval-group ">
                                            <div class="row HandOvergroup">
                                                <div id="approval-container" class="row">
                                                    <div class="col-sm-6">
                                                        <h6 id="mainEmployee" style="color:red">Main Hand Over Employee</h6>
                                                        <div class="approval-section active approvalSection">
                                                            <div class="select-approval d-flex flex-row justify-content-between align-items-center">

                                                                <div class="search w-100 me-0 mt-0">
                                                                    <select name="handOver[]" required class="dynamic-select" style="width: 100%"></select>
                                                                    <button class="search-icon"><i class="fa-solid fa-magnifying-glass"></i></button>
                                                                </div>
                                                                <div class="icon trash">
                                                                    <i class="fa-solid fa-trash"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">

                                            <div class="col-12">
                                                <div class="boxConfirmSubmit ">
                                                    <p>
                                                        "Your request will be assessed by the Group HR Director for
                                                        final approval, ensuring alignment with organizational goals and
                                                        resources"
                                                    </p>
                                                    <button class="btn btnSubmit" type="button" onclick="showAlert()">
                                                        Submit
                                                    </button>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                    <div class="col-12 ">
                                        <div class="confirmTable d-flex">
                                            <input type="checkbox" name="confirm" id="confirm">
                                            <label class="ms-3" for="confirm">
                                                By checking this box you confirm that all the data you entered is valid
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </article>
    </main>

    <div id="approve-popup" class="overlayPopupOverlay hidden">
        <div class="popupPolicy popupApprove">
            <h2>
                Please review your leave details carefully.
                <br>
                If you are sure, please confirm to proceed with your request.
            </h2>
            <div class="w-100 d-flex justify-content-end">
                <button id="approve-close-popup" class="btn btnClose btnYes  mt-3">YES</button>
            </div>
        </div>
    </div>

@endsection
@section('scripts')

    <script src="{{ asset('assets/js/leaves/NewLeaveRequests.js') }}"></script>
    <script src="{{ asset('assets/js/leaves/LeaveRequests.js') }}"></script>
    <script src="{{ asset('assets/js/leaves/ManageRequests.js') }}"></script>
    <script src="{{ asset('assets/js/leaves/Leave_dashboard.js') }}"></script>
    <script>
        /*Select & Add & Remove*/
        $(document).ready(function () {
            // Initialize the first Select2 dropdown
            $('.dynamic-select').select2({
                ajax: {
                    url: '{{route('employee.searchAjax')}}',
                    dataType: 'json',
                    cache: false, // Disable caching
                    delay: 250,
                    data: function (params) {
                        return { q: params.term }; // Pass search term
                    },
                    processResults: function (data) {
                        return { results: data.items }; // Map results
                    }
                },
                minimumInputLength: 1,
                placeholder: 'Search employees',
            });



            // Handle the "Add" button click to clone the block
            $('#add-approval').on('click', function () {
                const totalBlocks = $('.col-sm-6').length;

                // Check if the maximum limit (5) is reached
                if (totalBlocks >= 5) {
                    alert('You can only add up to 5 approvals.');
                    return;
                }

                // Clone the entire approval block
                const newApprovalBlock = $('.col-sm-6').first().clone();

                // Find and reset the cloned dropdown
                const newDropdown = newApprovalBlock.find('select.dynamic-select');
                newDropdown.val(null); // Clear the selected value
                newDropdown.html(''); // Clear any options
                newDropdown.removeAttr('data-select2-id').removeClass('select2-hidden-accessible'); // Remove Select2 attributes
                newApprovalBlock.find('.select2-container').remove(); // Remove old Select2-generated container

                // Update the <h6> text dynamically
                const titles = ["Main Hand Over Employee", "Second Hand Over", "Third Hand Over", "Fourth Hand Over", "Fifth Hand Over"];
                newApprovalBlock.find('#mainEmployee').text(titles[totalBlocks] || `Hand Over ${totalBlocks + 1}`);
                const titleColor = totalBlocks === 0 ? 'red' : 'black'; // First block red, others black
                newApprovalBlock.find('#mainEmployee').css('color', titleColor);

                // Append the cloned block to the container
                $('#approval-container').append(newApprovalBlock);

                // Reinitialize Select2 on the cloned dropdown
                newDropdown.select2({
                    ajax: {
                        url: '{{route('employee.searchAjax')}}',
                        dataType: 'json',
                        cache: false,
                        delay: 250,
                        data: function (params) {
                            return { q: params.term };
                        },
                        processResults: function (data) {
                            return { results: data.items };
                        }
                    },
                    minimumInputLength: 1,
                    placeholder: 'Search employees',
                });

                // Add event listener to trash button in the cloned block
                newApprovalBlock.find('.trash').on('click', function () {
                    const remainingBlocks = $('.col-sm-6').length;

                    // Ensure a minimum of 1 block
                    if (remainingBlocks <= 1) {
                        alert('You must have at least one approval.');
                        return;
                    }

                    $(this).closest('.col-sm-6').remove(); // Remove the block

                    // Update titles for remaining blocks
                    $('.col-sm-6').each(function (index) {
                        $(this).find('#mainEmployee').text(titles[index] || `Hand Over ${index + 1}`);
                    });
                });
            });

            // Handle the "Trash" button in the first block
            $('.trash').on('click', function () {
                const remainingBlocks = $('.col-sm-6').length;

                // Ensure a minimum of 1 block
                if (remainingBlocks <= 1) {
                    alert('You must have at least one approval.');
                    return;
                }

                $(this).closest('.col-sm-6').remove(); // Remove the block
            });
        });




        function validateForm() {
            let isValid = true;
            const errorMessages = [];

            // Validate Leave Type
            const leaveType = document.querySelector('input[name="leaveType"]:checked');
            if (!leaveType) {
                isValid = false;
                errorMessages.push("Please select a leave type.");
            }

            // Validate Annual Leave Options
            if (leaveType && leaveType.value === 'Annual Leave') {
                const annualType = document.querySelector('input[name="annualType"]:checked');
                if (!annualType) {
                    isValid = false;
                    errorMessages.push("Please select Inside Qatar or Outside Qatar for Annual Leave.");
                }

                // If Outside Qatar is selected, validate ticket options
                if (annualType && annualType.value === 'Outside Qatar') {
                    const ticketOption = document.querySelector('input[name="ticketOption"]:checked');
                    if (!ticketOption) {
                        isValid = false;
                        errorMessages.push("Please select a ticket option (Purchase Ticket or Request Company).");
                    }

                    // If "Request Company" is selected, validate date input
                    if (ticketOption && ticketOption.value === 'Request Company') {
                        const ticketDate = document.getElementById('ticketDate').value;
                        if (!ticketDate) {
                            isValid = false;
                            errorMessages.push("Please select a date for the company to arrange your ticket.");
                        }
                    }
                }
            }

            // Validate From and To Dates
            const fromDate = document.getElementById('FromDate').value;
            const toDate = document.getElementById('ToDate').value;

            if (!fromDate) {
                isValid = false;
                errorMessages.push("Please select a 'From' date.");
            }

            if (!toDate) {
                isValid = false;
                errorMessages.push("Please select a 'To' date.");
            }

            if (fromDate && toDate && new Date(fromDate) > new Date(toDate)) {
                isValid = false;
                errorMessages.push("'From' date cannot be later than 'To' date.");
            }

            // Validate Phone Number
            const phoneNumber = document.querySelector('input[name="phoneNumber"]').value;
            if (!phoneNumber || !/^\d{8,15}$/.test(phoneNumber)) {
                isValid = false;
                errorMessages.push("Please enter a valid phone number (8 to 15 digits).");
            }

            // Validate Hand Over Dropdowns
            const handOverDropdowns = document.querySelectorAll('.dynamic-select');
            handOverDropdowns.forEach((dropdown, index) => {
                const selectedValue = $(dropdown).val();
                if (!selectedValue || selectedValue === "") {
                    isValid = false;
                    errorMessages.push(`Please select an employee for Hand Over dropdown #${index + 1}.`);
                }
            });

            // Return validation result and messages
            return { isValid, errorMessages };
        }

        function showAlert() {
            const validation = validateForm(); // Custom validation function

            if (!validation.isValid) {
                // Show validation errors if form is invalid
                Swal.fire({
                    title: 'Validation Errors',
                    html: validation.errorMessages.join('<br>'),
                    icon: 'error',
                });
                return; // Stop execution if validation fails
            }

            // Show confirmation alert if form is valid
            Swal.fire({
                title: 'Confirmation',
                text: 'Do you want to proceed?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes',
                cancelButtonText: 'No',
            }).then((result) => {
                if (result.isConfirmed) {
                    // Programmatically submit the form
                    document.getElementById('MainForm').submit();
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    Swal.fire({
                        title: 'Cancelled',
                        text: 'Your submission has been cancelled.',
                        icon: 'info',
                    });
                }
            });
        }

        // Attach the `showAlert` function to the form submit button
        document.querySelector('.btnSubmit').addEventListener('click', function (e) {
            e.preventDefault(); // Prevent the default form submission
            showAlert();
        });



    </script>


@endsection

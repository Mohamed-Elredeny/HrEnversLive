@extends('Dashboard.employee.Personal_Certificate.Certificate_Approval')
@section('certificate_content_approval')
    <style>
        .row {
            display: flex; /* Enables Flexbox */
            justify-content: space-between; /* Adds space between the two items */
            align-items: center; /* Aligns items vertically */
        }

        .imagee {
            max-width: 150px; /* Restricts the width of each item */
            text-align: center; /* Centers the content inside the imagee container */
        }

        .img-fluid img {
            max-width: 100%; /* Ensures imagees are responsive */
            height: auto;
        }

    </style>
    @foreach($employee as $emp)
        <div class="col-12" style=" padding: 20px">
            <div style="text-align: right;color:#a39e9e">
                REF#:EA-MGF-049 REV01
            </div>
            <br>

            <div class="text-right">
                <h6>
               <span style="font-weight: bold;display: inline">
                   Date: {{$certificate->date_submit}}
            <br>
            Ref No: {{$emp->empCode}}/CBQ/2024</span>

                </h6> </div>

            <br><br>
            <h4 style="font-weight: bold; text-align: center; width: 100%;display: inline; text-decoration: underline; text-underline-offset: 5px;">
                <u>TO WHOMSOEVER IT MAY CONCERN</u></h4>
            <br>
            <h5>
                <br><br>
                This is to certify that<span style="font-weight: bold;display: inline;"> @if($emp->sex=="Male")Mr. @else Ms. @endif <b style="font-weight: bold"> {{$emp->empName}}</span>

                , holder of <span style="font-weight: bold;display: inline;">{{$emp->nationality}}</span> Passport <span style="font-weight: bold;display: inline;">{{$emp->passportNo}}</span> & QID <span style="font-weight: bold;display: inline;">{{$emp->visaNo}}</span> </b>
                is a confirmed employee of
                <span style="font-weight: bold;display: inline;">{{$emp->company_id}}</span> .

                He has been working with us since <span style="font-weight: bold;display: inline;"> {{$emp->joiningDate}}</span> till date.  He is working in the capacity of<span style="font-weight: bold;display: inline;"> {{$emp->designation}}</span> .
                <br><br>
                @if($certificate->ref == "SALARY CERTIFICATE")
                    His present monthly Gross salary is Qrs.<span style="font-weight: bold;display: inline;"> @isset($emp->total_salary){{$emp->total_salary}}</span> / <span style="font-weight: bold;display: inline;">{{$emp->total_salary}}@else ----- @endisset</span> per month.
                    <br>
                    <br>
                @endif
                This Certificate is issued upon employee request without any liability against <span style="font-weight: bold;display: inline;">{{$emp->company_id}}</span>
                <br><br>
                <b style="font-weight: bold">For</b><span style="font-weight: bold;display: inline;"> {{$emp->company_id}}</span>
                <br>
            </h5>
            <br>
            Elie Azzi
            <br>
            <h6 style="font-weight: bold">Group HR Director
            </h6>
            <div class="Footer_certificate">
                <div class="Footer_certificate_photo">
                    <div class="row" >
                        <div class="col-6">
                            <div class="imagee" >
                                <div class="img-fluid">
                                    <img src="../../../assets/images/logos/1717495704_Copy of Untitled Design.png" alt="Medgulf Header">
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="imagee" >
                                <div class="img-fluid company">
                                    @if ($emp->company_id == "medgulf")
                                        <img class="Medgulf" src="../../../assets/images/logos/company_1_sign.png" alt="Medgulf Header">
                                    @elseif ($emp->company_id == "trags")
                                        <img class="tragsEng" src="../../../assets/images/logos/company_2_sign.png" alt="tragsEng Header">
                                    @else
                                        <img class="trags" src="../../../assets/images/logos/company_3_sign.png" alt="trags Header">
                                    @endif
                                </div>
                            </div></div></div>
                </div>
            </div>
        </div>
    @endforeach
@endsection

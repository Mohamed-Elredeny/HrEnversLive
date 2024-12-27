@extends('Dashboard.employee.Personal_Certificate.Certificate_Approval')
@section('certificate_content_approval')

    @foreach($employee as $emp)

        <div class="content_certificate">

            <div class="header_certificate">
                <div style="text-align: right;color:#a39e9e">
                    REF#:EA-MGF-049 REV01
                </div>
                <br>
                <div style="text-align: right;">
                    <h5 >
                        Date: {{$certificate->date_submit}}
                        <br>
                        Ref No: {{$emp->empCode}}/CBQ/2024</h5>
                </div>

            </div>
            <br>
            <div class="body_certificate">
                <center>
                    <h5 style="font-weight: bold; display: inline; text-decoration: underline; text-underline-offset: 5px;">
                        <u>TO WHOMSOEVER IT MAY CONCERN</u></h5></center>
                    <h5>
                    <br><br>
                    This is to certify that<span style="font-weight: bold;display: inline;"> @if($emp->sex=="Male")
                            Mr.
                        @else
                            Ms.
                        @endif       {{$emp->empName}}</span>
                    , holder of <span style="font-weight: bold;display: inline;">{{$emp->nationality}}</span>
                    Passport <span style="font-weight: bold;display: inline;">{{$emp->passportNo}}</span> & QID
                    <span style="font-weight: bold;display: inline;">{{$emp->visaNo}}</span>
                    is a confirmed employee of
                    <span style="font-weight: bold;display: inline;">{{$emp->company_id}}</span> .

                    He has been working with us since <span
                        style="font-weight: bold;display: inline;"> {{$emp->joiningDate}}</span> till date. He is
                    working in the capacity of<span
                        style="font-weight: bold;display: inline;"> {{$emp->designation}}</span> .
                    <br><br>
                    @if($certificate->ref == "SALARY CERTIFICATE")
                        His present monthly Gross salary is Qrs.<span
                            style="font-weight: bold;display: inline;"> @isset($emp->total_salary){{$emp->total_salary}}</span>
                        / <span style="font-weight: bold;display: inline;">{{$emp->total_salary}}@else
                                -----
                            @endisset</span> per month.
                        <br>
                        <br>
                    @endif
                    This Certificate is issued upon employee request without any liability against

                        <span style="font-weight: bold;display: inline;">{{$emp->company_id}}</span>.
                    <br><br>
                    <span style="font-weight: bold;display: inline;">For {{$emp->company_id}}</span>
                    <br><br><br><br>
                    <div class="Footer_certificate">
                        <div class="Footer_certificate_photo">
                            <div class="image">
                                <div class="img-fluid">
                                    <img src="{{asset('assets/images/logos')}}/{{$emp->signature??""}}"
                                        alt="Medgulf Header">
                                </div>
                            </div>
                            <div class="image">
                                <div class="img-fluid company">
                                    <!-- <img class="Medgulf" src="../../../assets/images/logos/company_1_sign.png" alt="Medgulf Header"> -->
                                    <img class="tragsEng" src="../../../assets/images/logos/company_2_sign.png" alt="tragsEng Header">
                                    <!-- <img class="trags" src="../../../assets/images/logos/company_3_sign.png" alt="trags Header"> -->
                                </div>
                            </div>
                        </div>

                    </div>
                </h5>
                <br>
                <h5>
                    Elie Azzi</h5>

                <h5 style="font-weight: bold">Group HR Director
                </h5>


            </div>
        </div>

    @endforeach

@endsection

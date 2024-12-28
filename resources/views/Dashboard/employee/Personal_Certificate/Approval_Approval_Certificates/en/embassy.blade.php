@extends('Dashboard.employee.Personal_Certificate.Certificate_Approval')
@section('certificate_content_approval')

    @foreach($employee as $emp)
        <div class="content_certificate">
            <div class="header_certificate">
                <div style="text-align: right;color:#a39e9e">
                    REF# EA-MGF-055 REV01 REV 00
                </div>
                <br>

                <h5 class="text-right;">

                    Date: {{$certificate->date_submit}}

                </h5>
                <br>
            </div>
            <div class="body_certificate">
                <h5>
                   <span style="font-weight: bold; display: inline; ">

                       The  {{$certificate->embassy}}
            <br>
            Doha – Qatar</span>
                </h5>
                <br>
                <h5>
       <span style="font-weight: bold; display: inline; text-decoration: underline; text-underline-offset: 2px;">
    Subject: {{$certificate->ref}}
</span>
                </h5>
                <h5>
                    <br><br>
                    This is to certify that <span style="font-weight: bold;display: inline;"> @if($emp->sex=="Male")
                            Mr
                        @else
                            Ms
                        @endif
            . {{$emp->empName}}, {{$emp->nationality}} </span> National, holding Passport
                    Number<span style="font-weight: bold;display: inline;"> {{$emp->passportNo}}</span> and QID Number
                    <span style="font-weight: bold;display: inline;">{{$emp->visaNo}}</span> has been working with us
                    since
                    <span style="font-weight: bold;display: inline;">{{$emp->joiningDate}}</span> in the capacity of
                    <span style="font-weight: bold;display: inline;">{{$emp->designation}}</span>.
                    <br><br>
                    His present monthly gross salary is
                    QAR.<span
                        style="font-weight: bold;display: inline;"> @isset($emp->total_salary){{$emp->total_salary}}</span>
                    / <span style="font-weight: bold;display: inline;">{{$emp->total_salary}}@else
                            Unknown
                        @endisset</span>.
                    <br><br>
                    <span style="font-weight: bold;display: inline;"> {{$emp->company_id}} </span> doesn’t have any
                    objection for
                    <b style="font-weight: bold"> @if($emp->sex=="Male")
                            Mr
                        @else
                            Ms
                        @endif. {{$emp->empName}}</b> to
                    use part of his Annual Leave to visit your country.
                    <br><br>
                    This Certificate was given upon employee’s request without any liabilities against

                    <span style="font-weight: bold;display: inline;"> {{$emp->company_id}}.</span>
                    <br>
                    <br>
                </h5>
                <br>
                <h5><span style="display: inline;font-weight: bold">Regards</span></h5>
                <br>
                <div class="row">
                    <div class="col-6">
                            <?php
                            $elie = \App\Models\Employee::where('emailWork', 'elie.azzi@ensrv.com')->first();
                            ?>
                    </div>
                </div>
                <br><br>
                <div class="Footer_certificate">
                    <div class="Footer_certificate_photo">

                        <div class="imagee" >
                            <div class="img-fluid">
                                <img
                                    src="{{asset('assets/images/logos')}}/{{$emp->signature??""}}"
                                    alt="Medgulf Header">
                            </div>
                        </div>

                        <div class="imagee" >
                            <div class="img-fluid company">
                                @if ($emp->company_id == "medgulf")
                                    <img class="Medgulf" src="{{asset("assets/images/logos/company_1_sign.png")}}"  alt="Medgulf Header">
                                @elseif ($emp->company_id == "trags")
                                    <img class="tragsEng" src="{{asset("assets/images/logos/company_2_sign.png")}}"  alt="tragsEng Header">
                                @else
                                    <img class="trags" src="{{asset("assets/images/logos/company_3_sign.png")}}"  alt="trags Header">
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <br><br>
                <div class="col-3">
                    <div class="center">
                        <h5>
                            Elie Azzi
                        </h5>
                    </div>



                    <h5 style="font-weight: bold">Group HR Director</h5></div>
                <br>

            </div></div>

    @endforeach
@endsection

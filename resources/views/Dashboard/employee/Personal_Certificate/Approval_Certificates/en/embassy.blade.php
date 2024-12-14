@extends('Dashboard.employee.Personal_Certificate.Certificate_Approval')
@section('certificate_content_approval')
    @foreach($employee as $emp)
        <div class="col-12 " style=" padding: 20px">
            <br>

            <div style="text-align: right;color:#a39e9e">
                REF# EA-MGF-055 REV01 REV 00
            </div>
            <br>

            <h6 class="text-right;">
            <span style="font-weight: bold;display: inline">
            Date: {{$certificate->date_submit}}</span>

            </h6>
            <br>
            <h6>
                The  {{$certificate->embassy}}
                <br>
                Doha – Qatar
            </h6>
            <br><br>
            <h5>
       <span style="font-weight: bold; display: inline; text-decoration: underline; text-underline-offset: 5px;">
    Subject: {{$certificate->ref}}
</span>
            </h5>
            <h5>
                <br><br>
                This is to certify that  <span style="font-weight: bold;display: inline;"> @if($emp->sex=="Male")Mr @else Ms @endif. {{$emp->empName}}, {{$emp->nationality}} </span> National, holding Passport
                Number:<span style="font-weight: bold;display: inline;"> {{$emp->passportNo}}</span> and QID Number: <span style="font-weight: bold;display: inline;">{{$emp->visaNo}}</span> has been working with us since
                <span style="font-weight: bold;display: inline;">{{$emp->joiningDate}}</span> in the capacity of <span style="font-weight: bold;display: inline;">{{$emp->designation}}</span>.
                <br><br>
                His present monthly gross salary is
                QAR.<span style="font-weight: bold;display: inline;"> @isset($emp->total_salary){{$emp->total_salary}}</span> / <span style="font-weight: bold;display: inline;">{{$emp->total_salary}}@else Unknown @endisset</span>.
                <br><br>
                <span style="font-weight: bold;display: inline;"> {{$emp->company_id}} </span> doesn’t have any objection for
                <b style="font-weight: bold"> @if($emp->sex=="Male")Mr @else Ms @endif. {{$emp->empName}}</b> to
                visit your country.
                <br><br>
                This Certificate is being issued upon employee’s request without any liabilities against

                <span style="font-weight: bold;display: inline;"> {{$emp->company_id}}</span>
                <br>
                <br>
            </h5>
            <div class="col-3">
                <div class="center">
                    <h6>
                        Elie Azzi
                    </h6>
                </div>
                <br>
                <h6 style="font-weight: bold">Group HR Director</h6>


            </div>
            <br>
        </div>

    @endforeach
@endsection

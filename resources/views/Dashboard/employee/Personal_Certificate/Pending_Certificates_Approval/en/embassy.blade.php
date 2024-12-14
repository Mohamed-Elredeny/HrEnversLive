@extends('Dashboard.employee.Personal_Certificate.Certificate_Pending_Approval')
@section('certificate_content_pending_approval')
    <div class="col-12 " style=" padding: 20px">
        <br>

        <div style="text-align: right;color:#a39e9e">
            REF# EA-MGF-055 REV01 REV 00
        </div>
        <br>

        <h5 class="text-right;">
            <span style="font-weight: bold;display: inline">
            Date: {{$certificate->date_submit}}</span>

        </h5>
        <br>
        <h5>
            The  {{$certificate->embassy}}
            <br>
            Doha – Qatar
        </h5>
        <br><br>
        <h4>
       <span style="font-weight: bold; display: inline; text-decoration: underline; text-underline-offset: 5px;">
    Subject: {{$certificate->ref}}
</span>
        </h4>
        <h5>
            <br><br>
            This is to certify that  <span style="font-weight: bold;display: inline;"> @if($employee->sex=="Male")Mr @else Ms @endif
            . {{$employee->empName}}, {{$employee->nationality}} </span> National, holding Passport
            Number:<span style="font-weight: bold;display: inline;"> {{$employee->passportNo}}</span> and QID Number: <span style="font-weight: bold;display: inline;">{{$employee->visaNo}}</span> has been working with us since
            <span style="font-weight: bold;display: inline;">{{$employee->joiningDate}}</span> in the capacity of <span style="font-weight: bold;display: inline;">{{$employee->designation}}</span>.
            <br><br>
            His present monthly gross salary is
            QAR.<span style="font-weight: bold;display: inline;"> @isset($employee->total_salary){{$employee->total_salary}}</span> / <span style="font-weight: bold;display: inline;">{{$employee->total_salary}}@else Unknown @endisset</span>.
            <br><br>
            <span style="font-weight: bold;display: inline;"> {{$employee->company_id}} </span> doesn’t have any objection for
            <b style="font-weight: bold"> @if($employee->sex=="Male")Mr @else Ms @endif. {{$employee->empName}}</b> to
            visit your country.
            <br><br>
            This Certificate is being issued upon employee’s request without any liabilities against

            <span style="font-weight: bold;display: inline;"> {{$employee->company_id}}</span>
            <br>
            <br>
        </h5>
        <div class="col-3">
            <div class="center">
                <h5>
                    Elie Azzi
                </h5>
            </div>
            <br>
            <b style="font-weight: bold">Group HR Director</b></div>
        <br>


    </div>
@endsection
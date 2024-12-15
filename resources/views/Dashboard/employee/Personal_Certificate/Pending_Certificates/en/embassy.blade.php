@extends('Dashboard.employee.Personal_Certificate.Certificate_Pending')
@section('certificate_content')
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
        </h6 >
        <br><br>
        <h5>
       <span style="font-weight: bold; display: inline; text-decoration: underline; text-underline-offset: 5px;">
    Subject: {{$certificate->ref}}
</span>
        </h5>
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
            <h6>
        Elie Azzi
            </h6>
        </div>


            <br>
        <h6 style="font-weight: bold">Group HR Director</h6></div>
        <br>


    </div>
@endsection

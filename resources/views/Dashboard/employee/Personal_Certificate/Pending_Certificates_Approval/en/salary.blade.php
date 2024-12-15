@extends('Dashboard.employee.Personal_Certificate.Certificate_Pending_Approval')
@section('certificate_content_pending_approval')
    <div class="col-12" style=" padding: 20px">
        <div style="text-align: right;color:#a39e9e">
            REF#:EA-MGF-049 REV01
        </div>
        <br>

        <div class="text-right">
               <span style="font-weight: bold;display: inline">
                   Date: {{$certificate->date_submit}}
            <br>
            Ref No: {{$employee->empCode}}/CBQ/2024</span>
        </div>
        <br><br>
        <h5 style="font-weight: bold; display: inline; text-decoration: underline; text-underline-offset: 5px;">
            <u>TO WHOMSOEVER IT MAY CONCERN</u></h5>
        <br>
        <h5>
            <br><br>
            This is to certify that<span style="font-weight: bold;display: inline;"> @if($employee->sex=="Male")Mr. @else Ms. @endif     {{$employee->empName}}</span>

            , holder of <span style="font-weight: bold;display: inline;">{{$employee->nationality}}</span> Passport <span style="font-weight: bold;display: inline;">{{$employee->passportNo}}</span> & QID <span style="font-weight: bold;display: inline;">{{$employee->visaNo}}</span>
            is a confirmed employee of
            <span style="font-weight: bold;display: inline;">{{$employee->company_id}}</span> .

            He has been working with us since <span style="font-weight: bold;display: inline;"> {{$employee->joiningDate}}</span> till date.  He is working in the capacity of<span style="font-weight: bold;display: inline;"> {{$employee->designation}}</span> .
            <br><br>
            @if($certificate->ref == "SALARY CERTIFICATE")
                His present monthly Gross salary is Qrs.<span style="font-weight: bold;display: inline;"> @isset($employee->total_salary){{$employee->total_salary}}</span> / <span style="font-weight: bold;display: inline;">{{$employee->total_salary}}@else ----- @endisset</span> per month.
                <br>
                <br>
            @endif
            This Certificate is issued upon employee request without any liability against <span style="font-weight: bold;display: inline;">{{$employee->company_id}}</span>
            <br><br>
                For      <span style="font-weight: bold;display: inline"> {{$employee->company_id}}</span>
            <br>
        </h5>
        <br>
        Elie Azzi
        <br>
        <b style="font-weight: bold">Group HR Director
        </b>


    </div>
@endsection

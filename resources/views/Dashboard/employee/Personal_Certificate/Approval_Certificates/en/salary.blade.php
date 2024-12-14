@extends('Dashboard.employee.Personal_Certificate.Certificate_Approval')
@section('certificate_content_approval')
    @foreach($employee as $emp)
        <div class="col-12" style=" padding: 20px">
            <div style="text-align: right;color:#a39e9e">
              <h6>  REF#:EA-MGF-049 REV01</h6>
            </div>
            <br>

            <div class="text-right">
                <h6>   <span style="font-weight: bold;display: inline">

                   Date: {{$certificate->date_submit}}
            <br>
            Ref No: {{$emp->empCode}}/CBQ/2024</span></h6>
            </div>
            <br><br>
            <h5 style="font-weight: bold; display: inline; text-decoration: underline; text-underline-offset: 5px;">
                <u>TO WHOMSOEVER IT MAY CONCERN</u></h5>
            <br>
            <h5>
                <br><br>
                This is to certify that<span style="font-weight: bold;display: inline;"> @if($emp->sex=="Male")Mr. @else Ms. @endif       {{$emp->empName}}</span>

                , holder of <span style="font-weight: bold;display: inline;">{{$emp->nationality}}</span> Passport <span style="font-weight: bold;display: inline;">{{$emp->passportNo}}</span> & QID <span style="font-weight: bold;display: inline;">{{$emp->visaNo}}</span>
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
                    For      <span style="font-weight: bold;display: inline;"> {{$emp->company_id}}</span>
                <br>
            </h5>
            <br>
            <h6>
            Elie Azzi</h6>
            <br>
            <h6 style="font-weight: bold">Group HR Director
            </h6>


        </div>
    @endforeach
@endsection

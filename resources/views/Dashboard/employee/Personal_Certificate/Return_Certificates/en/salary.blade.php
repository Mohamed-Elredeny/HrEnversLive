@extends('Dashboard.employee.Personal_Certificate.Certificate_Returned')
@section('Certificate_Content_Return')
{{--    @foreach($employee as $emp)--}}
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
                        Ref No: {{$employee->empCode}}/CBQ/{{$currentYear}}</h5>
                </div>

            </div>
            <br>
            <div class="body_certificate">
                <center>
                    <h5 style="font-weight: bold; display: inline; text-decoration: underline; text-underline-offset: 5px;">
                        <u>TO WHOMSOEVER IT MAY CONCERN</u></h5></center>
                <h5>
                    <br><br>
                    This is to certify that<span style="font-weight: bold;display: inline;"> @if($employee->sex=="Male")
                            Mr.
                        @else
                            Ms.
                        @endif       {{$employee->empName}}</span>
                    , holder of <span style="font-weight: bold;display: inline;">{{$employee->nationality}}</span>
                    Passport <span style="font-weight: bold;display: inline;">{{$employee->passportNo}}</span> & QID
                    <span style="font-weight: bold;display: inline;">{{$employee->visaNo}}</span>
                    is a confirmed employee of
                    <span style="font-weight: bold;display: inline;">{{$employee->company_id}}</span> .

                    He has been working with us since <span
                        style="font-weight: bold;display: inline;"> {{$employee->joiningDate}}</span> till date. He is
                    working in the capacity of<span
                        style="font-weight: bold;display: inline;"> {{$employee->designation}}</span> .
                    <br><br>
                    @if($certificate->ref == "SALARY CERTIFICATE")
                        His present monthly Gross salary is Qrs.<span
                            style="font-weight: bold;display: inline;"> @isset($employee->total_salary){{$employee->total_salary}}</span>
                        / <span style="font-weight: bold;display: inline;">{{$employee->total_salary}}@else
                                -----
                            @endisset</span> per month.
                        <br>
                        <br>
                    @endif
                    This Certificate is issued upon employee request without any liability against

                    <span style="font-weight: bold;display: inline;">{{$employee->company_id}}</span>.
                    <br><br>
                    <span style="font-weight: bold;display: inline;">For {{$employee->company_id}}</span>

                </h5>
                <br>
                <h5>
                    Elie Azzi</h5>

                <h5 style="font-weight: bold">Group HR Director
                </h5>


            </div>
        </div>

{{--    @endforeach--}}
@endsection

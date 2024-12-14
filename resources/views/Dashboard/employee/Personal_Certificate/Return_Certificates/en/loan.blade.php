@extends('Dashboard.employee.Personal_Certificate.Certificate_Returned')
@section('Certificate_Content_Return')
    @foreach($employee as $emp)
        <div class="col-12" style="; padding: 20px">
            <br>

            <div style="text-align: right;color:#a39e9e">
                REF#: EA-MGF-041 REV02
            </div>
            <br><br>
            <div style="text-align: right;">
                <h5>
             <span style="font-weight: bold;display: inline">
                 Date: {{$certificate->date_submit}}</span>
                    <br>
                    Ref No  {{$emp->empCode}}/CBQ/2024
                </h5>
            </div>
            <br><br>
            <h5>
                <b style="font-weight: bold">The Manager</b>
                <br>
                Commercial Bank of Qatar
                <br>
                State of Doha – Qatar
                <br><br>
            </h5>
            <h5>

                <br><br>
                This is to certify that <b style="font-weight: bold">
                    @if($emp->sex=="Male")Mr @else Ms @endif<span style="display: inline;font-weight: bold">
                   {{$emp->empName}} </span> QID/ Visa No.
                    <span style="display: inline;font-weight: bold">{{$emp->visaNo}} </span>
                    and holder of <span style="display: inline;font-weight: bold">{{$emp->nationality}}</span>
                    passport Number <span style="display: inline;font-weight: bold"> {{$emp->passportNo}} </span>
                </b> working in the capacity of <span style="display: inline;font-weight: bold">hr{{$emp->designation}} </span>
                is a confirmed employee of <span style="display: inline;font-weight: bold"> {{$emp->company_id}} </span>. The stated employee joined the company on  {{$emp->joiningDate}} and
                still continuing.
                <br><br>
                Gross Salary of the stated employee per month is Qar <span style=";display: inline;font-weight: bold"> @isset($emp->total_salary){{$emp->total_salary}}

            </span>/<span style=";display: inline;font-weight: bold"> {{$emp->total_salary}}@else Unknown @endisset</span>.
                <br><br>
                To assist the above mentioned employee to obtain <span style="display: inline;font-weight: bold">{{$certificate->ref}} </span>from your bank, we confirm that this
                monthly salary will continue to be paid to his bank account, account number<span style="display: inline;font-weight: bold">7676756 {{$emp->empAcc}}</span> effective<span style="display: inline;font-weight: bold"> next
            month.</span>
                <br><br>
                If the above mentioned employee resigns or his employment is terminated by <span style="display: inline;font-weight: bold">{{$emp->company_id}}</span>, we will
                inform you accordingly and pay all amounts of End of services benefits due to him, if any, to his aforementioned
                bank account.
                <br><br>
                We confirm that both monthly salary and end of service dues, if any, will not be transferred to another bank
                before obtaining a written clearance Letter from your bank or by directive through Qatar courts.
                <br><br>
                The bank and above named employee fully understands that <span style="display: inline;font-weight: bold">{{$emp->company_id}}</span> does not, in any way, hold
                itself responsible for any debits incurred by him and that the granting of credit or loan is the sole discretion
                of your Bank.
                <br><br></h5>

            <br>
            <h5 >For<span style="  display: inline;font-weight: bold"> {{$emp->company_id}}</span></h5>
            <br>
            <div class="row">
                <div class="col-6">

                </div>
            </div>
            <br>
            Elie Azzi
            <br>
            <h6 style="font-weight: bold">Group HR Director
            </h6>
            <br>

        </div>
    @endforeach
@endsection

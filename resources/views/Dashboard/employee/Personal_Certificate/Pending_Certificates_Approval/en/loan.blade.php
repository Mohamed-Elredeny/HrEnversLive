@extends('Dashboard.employee.Personal_Certificate.Certificate_Pending_Approval')
@section('certificate_content_pending_approval')


    <div class="content_certificate">
        <div class="header_certificate">
            <div style="text-align: right;color:#a39e9e">
                REF#: EA-MGF-041 REV02
            </div>
            <br>
            <div style="text-align: right;">
                <h5>

                    Date: {{$certificate->date_submit}}
                    <br>
                    Ref No  {{$employee->empCode}}/CBQ/2024
                </h5>
            </div>
            <br>

            <h5>
                <b style="font-weight: bold">The Manager</b>
                <br>
                Commercial Bank of Qatar
                <br>
                Doha – Qatar
                <br>
                <br>
                <b style="font-weight: bold;text-decoration: underline;">Subject:</b> Standard Letter,
            </h5> </div>
        <div class="body_certificate">
            <h5>

                This is to certify that <b style="font-weight: bold">
                    @if($employee->sex=="Male")Mr @else Ms @endif<span style="display: inline;font-weight: bold">
                   {{$employee->empName}} </span> QID/ Visa No.
                    <span style="display: inline;font-weight: bold">{{$employee->visaNo}} </span>
                    and holder of <span style="display: inline;font-weight: bold">{{$employee->nationality}}</span>
                    passport Number <span style="display: inline;font-weight: bold"> {{$employee->passportNo}} </span>
                </b> working in the capacity of <span style="display: inline;font-weight: bold">hr{{$employee->designation}} </span>
                is a confirmed employee of <span style="display: inline;font-weight: bold"> {{$employee->company_id}} </span>. The stated employee joined the company on  {{$employee->joiningDate}} and
                still continuing.
                <br>
                <br>
                Gross Salary of the stated employee per month is Qar <span style="display: inline;font-weight: bold"> @isset($employee->total_salary){{$employee->total_salary}}
            </span>/<span style=";display: inline;font-weight: bold"> {{$employee->total_salary}}@else Unknown @endisset</span>.
                <br><br>
                To assist the above mentioned employee to obtain <span style="display: inline;font-weight: bold">{{$certificate->ref}} </span>from your bank, we confirm that
                monthly salary will continue to be paid to his bank account, account number<span style="display: inline;font-weight: bold">7676756 {{$employee->empAcc}}</span> effective<span style="display: inline;font-weight: bold"> next
            month.</span>
                <br><br>
                If the above-mentioned employee resigns or his employment is terminated by <span style="display: inline;font-weight: bold">{{$employee->company_id}}</span>, we will
                inform you accordingly and pay all amounts of End of services benefits due , if any, to employee aforementioned
                bank account.
                <br><br>
                We confirm that both monthly salary and end of service dues, if any, will not be transferred to another bank
                before obtaining a written clearance Letter from your bank or by directive through Qatar courts.
                <br>
                <br>
                The bank and above named employee fully understands that <span style="display: inline;font-weight: bold">{{$employee->company_id}}</span> does not, in any way, hold
                itself responsible for any debits incurred by the employee and that the granting of credit or loan is the sole discretion of your Bank.
                <br>
            </h5>
            <br>
            <h5><span style="display: inline;font-weight: bold">For {{$employee->company_id}}</span></h5>
             <br>
            <div class="row">
                <div class="col-6">
                    <?php
                    $elie = \App\Models\Employee::where('emailWork', 'elie.azzi@ensrv.com')->first();
                    ?>
                </div>
            </div>

            <h5>

                Elie Azzi
                <br>
                <b style="display: inline;font-weight: bold">
                    Group HR Director
                </b>
                <br>
            </h5>
        </div>
    </div>



@endsection

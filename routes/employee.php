<?php

use App\Http\Controllers\CertificateController;
use App\Models\Certificates;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::group([
    'middleware' => 'auth:employee',
    'as' => 'employee.',
    'namespace' => 'Employee'
], function () {

    Route::get('index', function () {
        $idd = Auth::guard('employee')->user()->id ;

//        $userpermission = DB::table('user_permissions')->where('employee_id', '=', $idd)->get()??null;

        return view('Dashboard.employee.Personal_Certificate.index', );
    })->name('index');


    Route::get('EnglishCertificate', function () {
        return view('Dashboard.employee.Personal_Certificate.English_Certificate');
    })->name('EnglishCertificate');

    Route::post('EnglishCertificateSubmit', [CertificateController::class, 'storeEnglishcertificate'])->name('EnglishCertificateSubmit');
    Route::post('ArabicCertificateSubmit', [CertificateController::class, 'storeArabicCertificate'])->name('ArabicCertificateSubmit');

    Route::post('ReviewerCertificateConfirm/{id}', [CertificateController::class, 'submitcertificatereview'])->name('ReviewerCertificateConfirm');
    Route::post('ReviewerCertificateReturnToSender/{id}', [CertificateController::class, 'returncertificatereviewer'])->name('ReviewerCertificateReturnToSender');

    Route::post('ApprovalCertificateConfirm/{id}', [CertificateController::class, 'submitcertificateapproval'])->name('ApprovalCertificateConfirm');
    Route::post('ApprovalCertificateReturnToSender/{id}', [CertificateController::class, 'returncertificateapproval'])->name('ApprovalCertificateReturnToSender');

    Route::get('ArabicCertificate', function () {
        return view('Dashboard.employee.Personal_Certificate.Arabic_Certificate');
    })->name('ArabicCertificate');

    Route::get('Employee', function () {
        return view('Dashboard.employee.Personal_Certificate.employee');
    })->name('Employee');

    Route::get('MyCertificate', [CertificateController::class, 'show'])->name('MyCertificate');
    Route::get('ReviewCertificates', [CertificateController::class, 'showcertificatereviewer'])->name('ReviewCertificates');
    Route::get('ApprovalCertificates', function () {
        $id = Auth::guard('employee')->user()->id ?? null;
        $certificates = DB::table('certificate')->get();
        $employee=null;
        foreach ($certificates as $certificate) {
            $employee = DB::table('employees')->where('id', '=', $certificate->Emp_id ?? "")->get();
        }
        $certificatespending = DB::table('certificate')->where('review_status', '=', 'ConfirmCertificate')->where('approval_status', '=', null)->get();
        $certificatesreturn = DB::table('certificate')->where('approval_status', '=', 'Return To Sender')->get();
        $certificatesapproval = DB::table('certificate')->where('approval_status', '=', 'ConfirmCertificate')->get();
        return view('Dashboard.employee.Personal_Certificate.Approval_Certificates', ['employee' => $employee, 'certificates' => $certificates, 'certificatespending' => $certificatespending, 'certificatesreturn' => $certificatesreturn, 'certificatesapproval' => $certificatesapproval]);
    })->name('ApprovalCertificates');



    Route::get('CertificateApproval/{id}', function ($id) {
             $idd = Auth::guard('employee')->user()->id??null;
        $certificate = Certificates::find($id);
        $employee = DB::table('employees')->where('id', '=', $certificate->Emp_id ?? "")->get();

        $certificatespending = DB::table('certificate')->where('Emp_id', '=', $id)->where('review_status', '=', null)->get();
        $certificatesreturn = DB::table('certificate')->where('Emp_id', '=', $id)->where('review_status', '=', 'Return To Sender')->get();
        $certificatesapproval = DB::table('certificate')->where('Emp_id', '=', $id)->where('review_status', '=', 'ConfirmCertificate')->get();

        if ($certificate->ref == "PERSONA LOAN" || $certificate->ref == "CREDIT CARD" || $certificate->ref == "VEHICLE LOAN")
        {
            return view('Dashboard.employee.Personal_Certificate.Approval_Certificates.en.loan', [ 'certificate' => $certificate, 'employee' => $employee,'currentuserid'=>$idd]);

        }
        elseif ($certificate->ref == "EMPLOYMENT CERTIFICATE TO EMBASSY") {

            return view('Dashboard.employee.Personal_Certificate.Approval_Certificates.en.embassy',[ 'certificate' => $certificate, 'employee' => $employee,'currentuserid'=>$idd]);
        }
        elseif ($certificate->ref == "CERTIFICATE WITHOUT SALARY" || $certificate->ref == "SALARY CERTIFICATE") {

            return view('Dashboard.employee.Personal_Certificate.Approval_Certificates.en.salary',[ 'certificate' => $certificate, 'employee' => $employee,'currentuserid'=>$idd]);

        }
        elseif ($certificate->ref == "GATE PASS LOST") {

            return view('Dashboard.employee.Personal_Certificate.Approval_Certificates.ar.Gate_Pass_lost', [ 'certificate' => $certificate, 'employee' => $employee,'currentuserid'=>$idd]);

        }
        elseif ($certificate->ref == "GATE PASS CANCELLATION") {

            return view('Dashboard.employee.Personal_Certificate.Approval_Certificates.ar.Gate_Pass_Cancellation', [ 'certificate' => $certificate, 'employee' => $employee,'currentuserid'=>$idd]);

        }
        elseif ($certificate->ref == "EXPERIENCE CERTIFICATE") {

            return view('Dashboard.employee.Personal_Certificate.Approval_Certificates.ar.Experience_Certificate', [ 'certificate' => $certificate, 'employee' => $employee,'currentuserid'=>$idd]);

        }
        elseif ($certificate->ref == "FAMILY VISIT FISA REQUEST") {

            return view('Dashboard.employee.Personal_Certificate.Approval_Certificates.ar.Family_Visit_visa_request', [ 'certificate' => $certificate, 'employee' => $employee,'currentuserid'=>$idd]);

        }
        elseif ($certificate->ref == "FAMILY RESIDENCY VISA REQUEST") {

            return view('Dashboard.employee.Personal_Certificate.Approval_Certificates.ar.Family_Residency_visa_request', [ 'certificate' => $certificate, 'employee' => $employee,'currentuserid'=>$idd]);

        }
        elseif ($certificate->ref == "QID LOST") {

            return view('Dashboard.employee.Personal_Certificate.Approval_Certificates.ar.QID_Lost', [ 'certificate' => $certificate, 'employee' => $employee,'currentuserid'=>$idd]);
        }

        return view('Dashboard.employee.Personal_Certificate.Certificate_Approval', ['certificate' => $certificate, 'certificatespending' => $certificatespending, 'employee' => $employee, 'certificatesreturn' => $certificatesreturn, 'certificatesapproval' => $certificatesapproval]);
    })->name('CertificateApproval');
    Route::get('CertificateApprovalApproval/{id}', function ($id) {
        $idd = Auth::guard('employee')->user()->id??null;
        $certificate = Certificates::find($id);
        $employee = DB::table('employees')->where('id', '=', $certificate->Emp_id ?? "")->get();

        $certificatespending = DB::table('certificate')->where('Emp_id', '=', $id)->where('review_status', '=', null)->get();
        $certificatesreturn = DB::table('certificate')->where('Emp_id', '=', $id)->where('review_status', '=', 'Return To Sender')->get();
        $certificatesapproval = DB::table('certificate')->where('Emp_id', '=', $id)->where('review_status', '=', 'ConfirmCertificate')->get();

        if ($certificate->ref == "PERSONA LOAN" || $certificate->ref == "CREDIT CARD" || $certificate->ref == "VEHICLE LOAN")
        {
            return view('Dashboard.employee.Personal_Certificate.Approval_Approval_Certificates.en.loan', [ 'certificate' => $certificate, 'employee' => $employee,'currentuserid'=>$idd]);

        }
        elseif ($certificate->ref == "EMPLOYMENT CERTIFICATE TO EMBASSY") {

            return view('Dashboard.employee.Personal_Certificate.Approval_Approval_Certificates.en.embassy',[ 'certificate' => $certificate, 'employee' => $employee,'currentuserid'=>$idd]);
        }
        elseif ($certificate->ref == "CERTIFICATE WITHOUT SALARY" || $certificate->ref == "SALARY CERTIFICATE") {

            return view('Dashboard.employee.Personal_Certificate.Approval_Approval_Certificates.en.salary',[ 'certificate' => $certificate, 'employee' => $employee,'currentuserid'=>$idd]);

        }
        elseif ($certificate->ref == "GATE PASS LOST") {

            return view('Dashboard.employee.Personal_Certificate.Approval_Approval_Certificates.ar.Gate_Pass_lost', [ 'certificate' => $certificate, 'employee' => $employee,'currentuserid'=>$idd]);

        }
        elseif ($certificate->ref == "GATE PASS CANCELLATION") {

            return view('Dashboard.employee.Personal_Certificate.Approval_Approval_Certificates.ar.Gate_Pass_Cancellation', [ 'certificate' => $certificate, 'employee' => $employee,'currentuserid'=>$idd]);

        }
        elseif ($certificate->ref == "EXPERIENCE CERTIFICATE") {

            return view('Dashboard.employee.Personal_Certificate.Approval_Approval_Certificates.ar.Experience_Certificate', [ 'certificate' => $certificate, 'employee' => $employee,'currentuserid'=>$idd]);

        }
        elseif ($certificate->ref == "FAMILY VISIT FISA REQUEST") {

            return view('Dashboard.employee.Personal_Certificate.Approval_Approval_Certificates.ar.Family_Visit_visa_request', [ 'certificate' => $certificate, 'employee' => $employee,'currentuserid'=>$idd]);

        }
        elseif ($certificate->ref == "FAMILY RESIDENCY VISA REQUEST") {

            return view('Dashboard.employee.Personal_Certificate.Approval_Approval_Certificates.ar.Family_Residency_visa_request', [ 'certificate' => $certificate, 'employee' => $employee,'currentuserid'=>$idd]);

        }
        elseif ($certificate->ref == "QID LOST") {

            return view('Dashboard.employee.Personal_Certificate.Approval_Approval_Certificates.ar.QID_Lost', [ 'certificate' => $certificate, 'employee' => $employee,'currentuserid'=>$idd]);
        }

        return view('Dashboard.employee.Personal_Certificate.Certificate_Approval', ['certificate' => $certificate, 'certificatespending' => $certificatespending, 'employee' => $employee, 'certificatesreturn' => $certificatesreturn, 'certificatesapproval' => $certificatesapproval]);
    })->name('CertificateApprovalApproval');

    Route::get('CertificatePending/{id}', function ($id) {
        $idd = Auth::guard('employee')->user()->id ;
        $certificate = Certificates::find($id);
        $currentdate = Carbon::now()->toDateString();
        $employee = DB::table('employees')->where('id', '=', $certificate->Emp_id ?? "")->first();

        if ($certificate->ref == "PERSONA LOAN" || $certificate->ref == "CREDIT CARD" || $certificate->ref == "VEHICLE LOAN")
        {
            return view('Dashboard.employee.Personal_Certificate.Pending_Certificates.en.loan', ['currentdate' => $currentdate, 'certificate' => $certificate, 'employee' => $employee,'currentuserid'=>$idd]);

        }
        elseif ($certificate->ref == "EMPLOYMENT CERTIFICATE TO EMBASSY") {

            return view('Dashboard.employee.Personal_Certificate.Pending_Certificates.en.embassy',['currentdate' => $currentdate, 'certificate' => $certificate, 'employee' => $employee,'currentuserid'=>$idd]);
        }
        elseif ($certificate->ref == "CERTIFICATE WITHOUT SALARY" || $certificate->ref == "SALARY CERTIFICATE") {

            return view('Dashboard.employee.Personal_Certificate.Pending_Certificates.en.salary',['currentdate' => $currentdate, 'certificate' => $certificate, 'employee' => $employee,'currentuserid'=>$idd]);

        }
        elseif ($certificate->ref == "QID LOST") {

            return view('Dashboard.employee.Personal_Certificate.Pending_Certificates.ar.QID_Lost', ['currentdate' => $currentdate, 'certificate' => $certificate, 'employee' => $employee,'currentuserid'=>$idd]);

        }
        elseif ($certificate->ref == "GATE PASS LOST") {

            return view('Dashboard.employee.Personal_Certificate.Pending_Certificates.ar.Gate_Pass_lost', ['currentdate' => $currentdate, 'certificate' => $certificate, 'employee' => $employee,'currentuserid'=>$idd]);

        }
        elseif ($certificate->ref == "GATE PASS CANCELLATION") {

            return view('Dashboard.employee.Personal_Certificate.Pending_Certificates.ar.Gate_Pass_Cancellation', ['currentdate' => $currentdate, 'certificate' => $certificate, 'employee' => $employee,'currentuserid'=>$idd]);

        }
        elseif ($certificate->ref == "EXPERIENCE CERTIFICATE") {

            return view('Dashboard.employee.Personal_Certificate.Pending_Certificates.ar.Experience_Certificate', ['currentdate' => $currentdate, 'certificate' => $certificate, 'employee' => $employee,'currentuserid'=>$idd]);

        }
        elseif ($certificate->ref == "FAMILY VISIT FISA REQUEST") {

            return view('Dashboard.employee.Personal_Certificate.Pending_Certificates.ar.Family_Visit_visa_request', ['currentdate' => $currentdate, 'certificate' => $certificate, 'employee' => $employee,'currentuserid'=>$idd]);

        }
        elseif ($certificate->ref == "FAMILY RESIDENCY VISA REQUEST") {

            return view('Dashboard.employee.Personal_Certificate.Pending_Certificates.ar.Family_Residency_visa_request', ['currentdate' => $currentdate, 'certificate' => $certificate, 'employee' => $employee,'currentuserid'=>$idd]);

        }
        elseif ($certificate->type == "QID LOST") {

            return view('Dashboard.employee.Personal_Certificate.Pending_Certificates.ar.QID_Lost', ['currentdate' => $currentdate, 'certificate' => $certificate, 'employee' => $employee,'currentuserid'=>$idd]);
        }
        return view('Dashboard.employee.Personal_Certificate.Pending_Certificates.ar.Experience_Certificate', ['currentdate' => $currentdate, 'certificate' => $certificate, 'employee' => $employee,'currentuserid'=>$idd]);
    })->name('CertificatePending');

    Route::get('CertificatePendingApproval/{id}', function ($id) {
        $idd = Auth::guard('employee')->user()->id ;
        $certificate = Certificates::find($id);
        $currentdate = Carbon::now()->toDateString();
//        $employee = DB::table('employees')->where('id', '=', $certificate->Emp_id ?? "")->first();
$employee=\App\Models\Employee::find($certificate->Emp_id ?? "");
        if ($certificate->ref == "PERSONA LOAN" || $certificate->ref == "CREDIT CARD" || $certificate->ref == "VEHICLE LOAN")
        {
            return view('Dashboard.employee.Personal_Certificate.Pending_Certificates_Approval.en.loan', ['currentdate' => $currentdate, 'certificate' => $certificate, 'employee' => $employee,'currentuserid'=>$idd]);

        }
        elseif ($certificate->ref == "EMPLOYMENT CERTIFICATE TO EMBASSY") {

            return view('Dashboard.employee.Personal_Certificate.Pending_Certificates_Approval.en.embassy',['currentdate' => $currentdate, 'certificate' => $certificate, 'employee' => $employee,'currentuserid'=>$idd]);
        }
        elseif ($certificate->ref == "CERTIFICATE WITHOUT SALARY" || $certificate->ref == "SALARY CERTIFICATE") {

            return view('Dashboard.employee.Personal_Certificate.Pending_Certificates_Approval.en.salary',['currentdate' => $currentdate, 'certificate' => $certificate, 'employee' => $employee,'currentuserid'=>$idd]);

        }
        elseif ($certificate->ref == "QID LOST") {

            return view('Dashboard.employee.Personal_Certificate.Pending_Certificates_Approval.ar.QID_Lost', ['currentdate' => $currentdate, 'certificate' => $certificate, 'employee' => $employee,'currentuserid'=>$idd]);

        }
        elseif ($certificate->ref == "GATE PASS LOST") {

            return view('Dashboard.employee.Personal_Certificate.Pending_Certificates_Approval.ar.Gate_Pass_lost', ['currentdate' => $currentdate, 'certificate' => $certificate, 'employee' => $employee,'currentuserid'=>$idd]);

        }
        elseif ($certificate->ref == "GATE PASS CANCELLATION") {

            return view('Dashboard.employee.Personal_Certificate.Pending_Certificates_Approval.ar.Gate_Pass_Cancellation', ['currentdate' => $currentdate, 'certificate' => $certificate, 'employee' => $employee,'currentuserid'=>$idd]);

        }
        elseif ($certificate->ref == "EXPERIENCE CERTIFICATE") {

            return view('Dashboard.employee.Personal_Certificate.Pending_Certificates_Approval.ar.Experience_Certificate', ['currentdate' => $currentdate, 'certificate' => $certificate, 'employee' => $employee,'currentuserid'=>$idd]);

        }
        elseif ($certificate->ref == "FAMILY VISIT FISA REQUEST") {

            return view('Dashboard.employee.Personal_Certificate.Pending_Certificates_Approval.ar.Family_Visit_visa_request', ['currentdate' => $currentdate, 'certificate' => $certificate, 'employee' => $employee,'currentuserid'=>$idd]);

        }
        elseif ($certificate->ref == "FAMILY RESIDENCY VISA REQUEST") {

            return view('Dashboard.employee.Personal_Certificate.Pending_Certificates_Approval.ar.Family_Residency_visa_request', ['currentdate' => $currentdate, 'certificate' => $certificate, 'employee' => $employee,'currentuserid'=>$idd]);

        }
        elseif ($certificate->type == "QID LOST") {

            return view('Dashboard.employee.Personal_Certificate.Pending_Certificates_Approval.ar.QID_Lost', ['currentdate' => $currentdate, 'certificate' => $certificate, 'employee' => $employee,'currentuserid'=>$idd]);
        }
        return view('Dashboard.employee.Personal_Certificate.Certificate_Pending_Approval', ['currentdate' => $currentdate, 'certificate' => $certificate, 'employee' => $employee]);
    })->name('CertificatePendingApproval');
    Route::get('CertificateReturned/{id}', function ($id) {
        $idd = Auth::guard('employee')->user()->id ;
        $certificate = Certificates::find($id);
        $employee = DB::table('employees')->where('id', '=', $certificate->Emp_id ?? "")->get();
        $certificatespending = DB::table('certificate')->where('Emp_id', '=', $id)->where('review_status', '=', null)->get();
        $certificatesreturn = DB::table('certificate')->where('Emp_id', '=', $id)->where('review_status', '=', 'Return To Sender')->get();
        $certificatesapproval = DB::table('certificate')->where('Emp_id', '=', $id)->where('review_status', '=', 'ConfirmCertificate')->get();
        if ($certificate->ref == "PERSONA LOAN" || $certificate->ref == "CREDIT CARD" || $certificate->ref == "VEHICLE LOAN")
        {
            return view('Dashboard.employee.Personal_Certificate.Return_Certificates.en.loan', [ 'certificate' => $certificate, 'employee' => $employee,'currentuserid'=>$idd]);

        }
        elseif ($certificate->ref == "EMPLOYMENT CERTIFICATE TO EMBASSY") {

            return view('Dashboard.employee.Personal_Certificate.Return_Certificates.en.embassy',[ 'certificate' => $certificate, 'employee' => $employee,'currentuserid'=>$idd]);
        }
        elseif ($certificate->ref == "CERTIFICATE WITHOUT SALARY" || $certificate->ref == "SALARY CERTIFICATE") {

            return view('Dashboard.employee.Personal_Certificate.Return_Certificates.en.salary',[ 'certificate' => $certificate, 'employee' => $employee,'currentuserid'=>$id]);

        }
        elseif ($certificate->ref == "GATE PASS LOST") {

            return view('Dashboard.employee.Personal_Certificate.Return_Certificates.ar.Gate_Pass_lost', [ 'certificate' => $certificate, 'employee' => $employee,'currentuserid'=>$id]);

        }
        elseif ($certificate->ref == "GATE PASS CANCELLATION") {

            return view('Dashboard.employee.Personal_Certificate.Return_Certificates.ar.Gate_Pass_Cancellation', [ 'certificate' => $certificate, 'employee' => $employee,'currentuserid'=>$id]);

        }
        elseif ($certificate->ref == "EXPERIENCE CERTIFICATE") {

            return view('Dashboard.employee.Personal_Certificate.Return_Certificates.ar.Experience_Certificate', [ 'certificate' => $certificate, 'employee' => $employee,'currentuserid'=>$id]);

        }
        elseif ($certificate->ref == "FAMILY VISIT FISA REQUEST") {

            return view('Dashboard.employee.Personal_Certificate.Return_Certificates.ar.Family_Visit_visa_request', [ 'certificate' => $certificate, 'employee' => $employee,'currentuserid'=>$id]);

        }
        elseif ($certificate->ref == "FAMILY RESIDENCY VISA REQUEST") {

            return view('Dashboard.employee.Personal_Certificate.Return_Certificates.ar.Family_Residency_visa_request', [ 'certificate' => $certificate, 'employee' => $employee,'currentuserid'=>$id]);

        }
        elseif ($certificate->ref == "QID LOST") {

            return view('Dashboard.employee.Personal_Certificate.Return_Certificates.ar.QID_Lost', [ 'certificate' => $certificate, 'employee' => $employee,'currentuserid'=>$id]);
        }
//        return view('Dashboard.employee.Personal_Certificate.Certificate_Returned', ['certificate' => $certificate, 'employee' => $employee]);
    })->name('CertificateReturned');

    Route::get('employee', function () {
        return view('Dashboard.employee.Personal_Certificate.employee');
    })->name('employee');

});
//Auth::routes();


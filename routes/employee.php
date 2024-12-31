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
    Route::resource('certificates',\App\Http\Controllers\CertificateController::class);

    Route::get('index',[CertificateController::class,'index'])->name('index');


    Route::get('EnglishCertificate', function () {
        return view('Dashboard.employee.Personal_Certificate.English_Certificate');
    })->name('EnglishCertificate');

    Route::post('EnglishCertificateSubmit', [CertificateController::class, 'storeEnglishcertificate'])->name('EnglishCertificateSubmit');
    Route::post('ArabicCertificateSubmit', [CertificateController::class, 'storeArabicCertificate'])->name('ArabicCertificateSubmit');

    Route::post('ReviewerCertificateConfirm/{id}', [CertificateController::class, 'submitcertificatereview'])->name('ReviewerCertificateConfirm');

    Route::post('ReviewerConfirmCertificateApproval/{id}', [CertificateController::class, 'submitcertificatereviewapproval'])->name('ReviewerCertificateConfirmApproval');

    Route::post('ReviewerCertificateReturnToSender/{id}', [CertificateController::class, 'returncertificatereviewer'])->name('ReviewerCertificateReturnToSender');
    Route::post('ReviewerCertificateReturnToSenderApproval/{id}', [CertificateController::class, 'returncertificatereviewerapproval'])->name('ReviewerCertificateReturnToSenderApproval');

    Route::post('ApprovalCertificateConfirm/{id}', [CertificateController::class, 'submitcertificateapproval'])->name('ApprovalCertificateConfirm');
    Route::post('ApprovalCertificateReturnToSender/{id}', [CertificateController::class, 'returncertificateapproval'])->name('ApprovalCertificateReturnToSender');

    Route::get('ArabicCertificate', function () {
        return view('Dashboard.employee.Personal_Certificate.Arabic_Certificate');
    })->name('ArabicCertificate');

    Route::get('Employee', function () {
        return view('Dashboard.employee.Personal_Certificate.employee');
    })->name('Employee');
    Route::get('ReturnCertificatesApproval/{id}',
        function ($id){
        $idd = Auth::guard('employee')->user()->id??null;

        return view('Dashboard.employee.Personal_Certificate.Certificate_Returned_Approval');


    })->name('ReturnCertificatesApproval');

    Route::get('MyCertificate', [CertificateController::class, 'show'])->name('MyCertificate');
    Route::get('ReviewCertificates', [CertificateController::class, 'showcertificatereviewer'])->name('ReviewCertificates');
    Route::get('ApprovalCertificates',[CertificateController::class,'ApprovalCertificate'])->name('ApprovalCertificates');



    Route::get('Certificate/{type}/{id}',[CertificateController::class,'Certificatecontent'])->name('Certificate');














    Route::get('employee', function () {
        return view('Dashboard.employee.Personal_Certificate.employee');
    })->name('employee');

    Route::resource('leaves', "LeavesController");
});
//Auth::routes();


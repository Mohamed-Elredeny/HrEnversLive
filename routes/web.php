<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Models\Employee;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $entity = 0;
    return view('site.auth.signin',compact('entity'));
});
//Route::middleware('auth:employee')->group(function () {
Route::get('/dashboard', function () {
    $id = Auth::guard('employee')->user()->id ?? null;
    $employ=Employee::find($id);
    return view('Dashboard.Dashboard',['employee'=>$employ]);
})->name('dashboard');
//});

Route::get('SignUp', function () {
    return view('site.auth.signin');
})->name('signup');


Route::post('/signup', [AuthController::class, 'store'])->name('signuppage');

Route::post('/SignInMedgulf', [AuthController::class, 'loginMedgulf'])->name('signinpageMedgulf');
Route::post('/SignInTrags', [AuthController::class, 'loginTrags'])->name('signinpageTrags');
Route::post('/SignInEnjineering', [AuthController::class, 'loginEnjineering'])->name('signinpageEnjineering');


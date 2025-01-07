<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $entity = 0;
    return view('site.auth.signin',compact('entity'));
});

Route::get('SignUp', function () {
    return view('site.auth.signin');
})->name('login');


Route::post('/signup', [AuthController::class, 'store'])->name('signuppage');

Route::post('/SignInMedgulf', [AuthController::class, 'loginMedgulf'])->name('signinpageMedgulf');
Route::post('/SignInTrags', [AuthController::class, 'loginTrags'])->name('signinpageTrags');
Route::post('/SignInEnjineering', [AuthController::class, 'loginEnjineering'])->name('signinpageEnjineering');

//Route::resource('Certificates', "LeavesController");

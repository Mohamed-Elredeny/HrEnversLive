<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $entity = 0;
    return view('Site.auth.signin',compact('entity'));
});
//Route::middleware('auth:employee')->group(function () {
Route::get('/dashboard', function () {
    return view('Dashboard.Dashboard');
})->name('dashboard');
//});

Route::get('SignUp', function () {
    return view('Site.auth.signin');
})->name('signup');


Route::post('/signup', [RegisterController::class, 'store'])->name('signuppage');

Route::post('/SignInMedgulf', [LoginController::class, 'loginMedgulf'])->name('signinpageMedgulf');
Route::post('/SignInTrags', [LoginController::class, 'loginTrags'])->name('signinpageTrags');
Route::post('/SignInEnjineering', [LoginController::class, 'loginEnjineering'])->name('signinpageEnjineering');


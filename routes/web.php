<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('Site.auth.signin');
});
Route::middleware('auth:employee')->group(function () {
Route::get('/dashboard', function () {
    return view('Dashboard.Dashboard');
})->name('dashboard');});

Route::get('SignUp', function () {
    return view('site.auth.Register');
})->name('signup');


Route::post('/signup', [RegisterController::class, 'store'])->name('signuppage');

Route::post('/SignInMedgulf', [LoginController::class, 'loginMedgulf'])->name('signinpageMedgulf');
Route::post('/SignInTrags', [LoginController::class, 'loginTrags'])->name('signinpageTrags');
Route::post('/SignInEnjineering', [LoginController::class, 'loginEnjineering'])->name('signinpageEnjineering');


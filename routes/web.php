<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\RegistrationsController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\LayoutsController;
use App\Http\Controllers\EmailController;
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
    return view('index');
});
Route::get('/timetable', function () {
    return view('timetable');
});
Route::get('/service', function () {
    return view('service');
});
Route::get('/relatives', function () {
    return view('relatives');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/blog-details', function () {
    return view('blog-details');
});
Route::get('/application1', function () {
    return view('application1');
});


Route::get('/internamedicine', function () {
    return view('internamedicine');
});
Route::get('/dentist', function () {
    return view('dentist');
});

Route::get('/psychiaty', function () {
    return view('psychiaty');
});

Route::get('/neurology', function () {
    return view('neurology');
});

Route::get('/cardiology', function () {
    return view('cardiology');
});

Route::get('/endocrinology', function () {
    return view('endocrinology');
});

Route::get('/hemtology', function () {
    return view('hemtology');
});

Route::get('/nephrology', function () {
    return view('nephrology');
});

Route::get('/oncology', function () {
    return view('oncology');
});
Route::get('/rheumatology', function () {
    return view('rheumatology');
});
Route::get('/pedicatric', function () {
    return view('pedicatric');
});
Route::get('/doctor-register', function () {
    return view('doctor-register');
});
Route::get('/pathological-history', function () {
    return view('pathological-history');
});
Route::get('/application2', function () {
    return view('application2');
});

Route::get('posts',[PostsController::class,'index']);
Route::get('posts/{id}',[PostsController::class,'view']);

Route::get('/register',[RegistrationsController::class,'create']);
Route::post('/register',[RegistrationsController::class,'store'])->name('register.store');


Route::get('/login',[SessionsController::class,'create']);
Route::post('/login',[SessionsController::class,'store'])->name('session.login');
Route::get('/logout', [SessionsController::class,'destroy'])->name("session.destroy");

Route::get('/verify', [RegistrationsController::class,'verifyUser'])->name('sendemail');
Route::get('/ForgotPassword', [SessionsController::class, "forgotPassword"])->name('session.forgot');
Route::post('/ForgotPassword', [SessionsController::class, "RestorePassword"])->name("session.restore");

Route::get('reset-password/{token}', [SessionsController::class, 'showPasswordResetForm'])->name("sessions.password_reset");

Route::post('reset-password/{token}',
    [SessionsController::class, 'PasswordReset'])->name("new-password");


Route::get('/', [LayoutsController::class, 'index']);

Route::get('/timetable', [LayoutsController::class, 'timeTable']);

Route::get('/blog', [LayoutsController::class, 'blog']);

Route::get('/blog-details', [LayoutsController::class, 'blogDetails']);

Route::get('/relatives', [LayoutsController::class, 'relatives']);

Route::get('/service', [LayoutsController::class, 'service']);

Route::get('/application', [LayoutsController::class, 'application']);


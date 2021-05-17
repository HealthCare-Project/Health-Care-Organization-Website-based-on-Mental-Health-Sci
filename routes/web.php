<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\RegistrationsController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\LayoutsController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\DoctorsController;
use App\Http\Controllers\DoctorPageController;
use App\Http\Controllers\DoctorSessionsController;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ConfirmPasswordController;
use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\ComplaintsCommentsController;
use App\Http\Controllers\PathologicalHistoryController;
use App\Http\Controllers\RelativesArticleController;
use App\Http\Controllers\DoctorArticleController;
use App\Http\Controllers\NewsArticleController;
use App\Http\Controllers\FamousCaseController;

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
Route::get('/application1', function () {
    return view('applications/application1');
});

#Route::get('/pathological-history', function () {
 #   return view('applications/pathological-history');
#});
Route::get('/application2', function () {
    return view('applications/application2');
});


//medical department
Route::get('/dentist', [LayoutsController::class, 'dentist']);
Route::get('/oncology', [LayoutsController::class, 'oncology']);
Route::get('/neurology', [LayoutsController::class, 'neurology']);
Route::get('/pediatric', [LayoutsController::class, 'pediatric']);
Route::get('/psychiaty', [LayoutsController::class, 'psychiaty']);
Route::get('/cardiology', [LayoutsController::class, 'cardiology']);
Route::get('/hematology', [LayoutsController::class, 'hematology']);
Route::get('/nephrology', [LayoutsController::class, 'nephrology']);
Route::get('/rheumatology', [LayoutsController::class, 'rheumatology']);
Route::get('/endocrinology', [LayoutsController::class, 'endocrinology']);
Route::get('/internal medicine', [LayoutsController::class, 'internal medicine']);


//home page
Route::get('/', [LayoutsController::class, 'index']);

//timeTable 
Route::get('/timetable', [LayoutsController::class, 'timeTable']);

//blog 
Route::get('/blog', [LayoutsController::class, 'blog']);

//blog details 
Route::get('/blog-details', [LayoutsController::class, 'blogDetails']);

//relatives
Route::get('/relatives', [LayoutsController::class, 'relatives']);

//service
Route::get('/service', [LayoutsController::class, 'service']);

////
Route::get('posts',[PostsController::class,'index']);
Route::get('posts/{id}',[PostsController::class,'view']);

////
Route::get('famouscases',[FamousCaseController::class,'index']);
Route::get('famouscases/{id}',[FamousCaseController::class,'view']);

////
Route::get('newsarticles',[NewsArticleController::class,'index']);
Route::get('newsarticles/{id}',[NewsArticleController::class,'view']);

////
Route::get('relativesarticles',[RelativesArticleController::class,'index']);
Route::get('relativesarticles/{id}',[RelativesArticleController::class,'view']);

////
Route::get('doctorarticles',[DoctorArticleController::class,'index']);
Route::get('doctorarticles/{id}',[DoctorArticleController::class,'view']);

Route::get('/application', [LayoutsController::class, 'application']);

Route::group(['prefix'=>'doctor'], function() {

    //doctor register 
    Route::get('register', [DoctorsController::class, 'index']);
    Route::post('register', [DoctorsController::class, 'store'])->name('doctor.store');

    //doctor login
    Route::get('login', [DoctorSessionsController::class, 'create']);
    Route::post('login',[DoctorSessionsController::class,'store'])->name('doctor.login');

    //doctor logout
    Route::get('/logout', [DoctorSessionsController::class, 'destroy'])->name("doctor.logout");

    //doctor page 
//  Route::get('/doctor', [DoctorPageController::class, 'index']);

    //show hospitals
    Route::get('/hospital', [HospitalController::class, 'showHospitals']);

    //show hospitals doctors
    Route::get('/hospital-doctors', [HospitalController::class, 'getHospitalDoctors']);

    //Email vertification
    Route::get('email/verify', [VerificationController::class, 'show'])->name('verification.notice');
    Route::get('email/verify/{id}/{hash}', [VerificationController::class, 'verify'])->name('verification.verify');
    Route::post('email/resend', [VerificationController::class, 'resend'])->name('verification.resend');

    //password
    Route::get('password/confirm', [ConfirmPasswordController::class, 'showConfirmForm'])->name('password.confirm');
    Route::post('password/confirm', [ConfirmPasswordController::class, 'confirm']);
    Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
    Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
    Route::get('password/reset/{token}', [ResetPasswordController::class, 'reset'])->name('password.reset');
    Route::post('password/reset', [ResetPasswordController::class, 'showResetForm'])->name('password.update');
    Route::get("{id}", [DoctorPageController::class, "show"])->name("doc-profile-show");

});

Route::group(['prefix'=>'patient'], function() {
    Route::get('/login',[SessionsController::class,'create']);

    Route::get('/register',[RegistrationsController::class,'create']);
    Route::post('/register',[RegistrationsController::class,'store'])->name('register.store');

    Route::post('/login',[SessionsController::class,'store'])->name('session.login');
    Route::get('/logout', [SessionsController::class,'destroy'])->name("session.destroy");

    Route::get('/verify', [RegistrationsController::class,'verifyUser'])->name('sendemail');
    Route::get('/ForgotPassword', [SessionsController::class, "forgotPassword"])->name('session.forgot');
    Route::post('/ForgotPassword', [SessionsController::class, "RestorePassword"])->name("session.restore");

    Route::get('reset-password/{token}', [SessionsController::class, 'showPasswordResetForm'])->name("sessions.password_reset");

    Route::post('reset-password/{token}',
    [SessionsController::class, 'PasswordReset'])->name("new-password");

    //pathological history
#   Route::get('pathological-history', [PathologicalHistoryController::class, 'create']);
    Route::get('{id}/pathological-history/create', [PathologicalHistoryController::class, 'create']);
    Route::post('{id}/pathological-history/create', [PathologicalHistoryController::class, 'store'])->name('pathhistory.store');
    Route::get('pathological-history/show/{id}', [PathologicalHistoryController::class,'show']);
});

#
Route::get('complaints', [ComplaintController::class, 'index']);
Route::get('complaints/create', [ComplaintController::class, 'create']);
Route::post('complaints/create',[ComplaintController::class,'store'])->name('complaint.store');
Route::get('complaints/{id}', [ComplaintController::class,'show'])->name("show.complaint");
Route::post('complaints/{id}', [ComplaintsCommentsController::class,'store'])->name("complaint.comment");
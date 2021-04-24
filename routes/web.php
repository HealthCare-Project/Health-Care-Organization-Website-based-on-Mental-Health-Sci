<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\RegistrationsController;
use App\Http\Controllers\SessionsController;

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
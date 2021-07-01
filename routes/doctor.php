<?php

use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\XmlConfiguration\Group;
use App\Http\Controllers\doctor\DoctorsController;
use App\Http\Controllers\doctor\DoctorPageController;
use App\Http\Controllers\doctor\DoctorSessionsController;

/*
|--------------------------------------------------------------------------
| doctor Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for all doctors. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group.
|
*/
//doctor register
Route::get('register', [DoctorsController::class, 'index']);
Route::get('register', [DoctorsController::class, 'showData']);
Route::post('register', [DoctorsController::class, 'store'])->name('doctor.store');

//doctor login
Route::get('login', [DoctorSessionsController::class, 'create']);
Route::post('login', [DoctorSessionsController::class, 'store'])->name('doctor.login');

//doctor logout
Route::get('logout', [DoctorSessionsController::class, 'destroy'])->name("doctor.logout");

//doctor page 
Route::group(['middleware' => 'auth:doctor'], function(){
    Route::get('/', [DoctorPageController::class, 'index']);
});

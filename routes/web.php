<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LayoutsController;

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
Route::get('/', [LayoutsController::class, 'index']);

Route::get('/timetable', [LayoutsController::class, 'timeTable']);

Route::get('/blog', [LayoutsController::class, 'blog']);

Route::get('/blog-details', [LayoutsController::class, 'blogDetails']);

Route::get('/relatives', [LayoutsController::class, 'relatives']);

Route::get('/service', [LayoutsController::class, 'service']);

Route::get('/application', [LayoutsController::class, 'application']);


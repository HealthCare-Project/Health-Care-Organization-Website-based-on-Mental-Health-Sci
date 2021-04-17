<?php

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
Route::get('/hamada', function () {
    return view('hamada');
});

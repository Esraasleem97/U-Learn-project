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
    return view('frontend.page.Home');
})->name('homepage');

Route::get('/student-index', function () {
    return view('frontend.student.page.index');
})->name('student.index');

Route::get('/student-view', function () {
    return view('frontend.student.page.view');
})->name('student.view');
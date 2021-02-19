<?php

use App\Http\Controllers\frontend\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\Auth\AuthController;


Route::group(['prefix' => 'login', 'middleware' => 'guest:web'], function () {

    Route::get('teacher', [AuthController::class, 'Teacher'])
        ->name('login-teacher');

    Route::post('/teacher', [AuthController::class, 'authenticate'])
        ->name('teacher.login');

});


Route::group(['prefix' => 'register', 'middleware' => 'guest:web'], function () {
    Route::get('teacher', [RegisterController::class, 'Teacher'])
        ->name('teacher.register');

    Route::post('teacher', [RegisterController::class, 'create'])
        ->name('teacher.register.create');
});

Route::group(['prefix' => 'teacher', 'middleware' => 'auth:web'], function () {

    Route::get('/logout', [AuthController::class, 'logout'])->name('teacher.logout');

    Route::group(['middleware' => 'allow:teacher'], function () {

        Route::view('/add', 'frontend.teacher.page.add')->name('teacher.add');

        Route::view('/index', 'frontend.teacher.page.index')->name('teacher.index');
        Route::view('/view', 'frontend.teacher.page.view')->name('teacher.view');

    });

});

<?php

use App\Http\Controllers\frontend\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\Auth\LoginController;


Route::group(['prefix' => 'login', 'middleware' => 'guest:web'], function () {

    Route::get('login/teacher', [LoginController::class, 'SubmitLoginTeacher'])
        ->name('login-teacher');

    Route::post('/teacher', [LoginController::class, 'login'])
        ->name('teacher.login');
});


Route::group(['prefix' => 'register', 'middleware' => 'guest:web'], function () {
    Route::get('/register/teacher', [RegisterController::class, 'Teacher'])
        ->name('teacher.register');

    Route::post('/register/teacher', [RegisterController::class, 'create'])
        ->name('teacher.register.create');

});

Route::view('/add','teacher.page.addVideo')->name('add');

Route::view('/index','teacher.page.index')->name('index');


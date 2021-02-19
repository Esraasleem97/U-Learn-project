<?php

use App\Http\Controllers\frontend\Auth\RegisterController;
use App\Http\Controllers\frontend\Teacher\BookController;
use App\Http\Controllers\frontend\Teacher\LessonController;
use App\Http\Controllers\frontend\Teacher\StageController;
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
        Route::get('/stage', [StageController::class, 'index'])->name('teacher.stage');
        Route::get('/books', [BookController::class, 'index'])->name('teacher.books');

        Route::group(['prefix' => 'lesson'], function () {
            Route::get('/add', [LessonController::class, 'create'])->name('teacher.add');
            Route::get('/index', [LessonController::class, 'index'])->name('teacher.index');
//            Route::get('/view', 'frontend.teacher.page.view')->name('teacher.view');
        });
    });

});

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
        Route::get('/books/{year}', [BookController::class, 'show'])->name('teacher.books');

        Route::group(['prefix' => 'lesson'], function () {
            Route::get('/create/{book_id}', [LessonController::class, 'create'])->name('teacher.add');
            Route::post('/store', [LessonController::class, 'store'])->name('teacher.store');
            Route::get('/index', [LessonController::class, 'index'])->name('teacher.index');
            Route::get('/edit/{id}', [LessonController::class, 'edit'])->name('teacher.edit');
            Route::post('/update/{id}', [LessonController::class, 'update'])->name('teacher.update');
            Route::post('/destroy/{id}', [LessonController::class, 'destroy'])->name('teacher.destroy');
            Route::get('/view/{id}', [LessonController::class, 'view'])->name('teacher.view');
        });
    });

});

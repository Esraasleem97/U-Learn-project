<?php


use App\Http\Controllers\frontend\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\Auth\LoginController;
Route::group(['prefix' => 'login'  , 'middleware' => 'guest:web'] , function() {
    Route::get('student',[LoginController::class,'SubmitLoginStudent'])
        ->name('login-student');

    Route::post('/student',[LoginController::class,'login'])
        ->name('student.login');

<<<<<<< HEAD
=======

>>>>>>> origin
});

Route::group(['prefix' => 'register'  , 'middleware' => 'guest:web'] , function() {

Route::get('/student',[RegisterController::class,'Student'])
    ->name('student.register');

Route::post('/student',[RegisterController::class,'create'])
    ->name('student.register.create');
<<<<<<< HEAD
=======

>>>>>>> origin
});

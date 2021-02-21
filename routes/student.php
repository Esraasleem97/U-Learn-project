<?php


use App\Http\Controllers\frontend\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\Auth\AuthController;
Route::group(['prefix' => 'login'  , 'middleware' => 'guest:web'] , function() {
    Route::get('student',[AuthController::class,'Student'])
        ->name('login-student');

    Route::post('/student',[AuthController::class,'authenticate'])
        ->name('student.login');
});

Route::group(['prefix' => 'register'  , 'middleware' => 'guest:web'] , function() {
Route::get('/student',[RegisterController::class,'Student'])
    ->name('student.register');

Route::post('/student',[RegisterController::class,'create'])
    ->name('student.register.create');
});

Route::group(['prefix' => 'teacher', 'middleware' => 'auth:web'], function () {

    Route::get('/logout', [AuthController::class , 'logout'])->name('student.logout');

});
Route::get('/student-index', function () {
    return view('frontend.student.page.index');
})->name('student.index');

Route::get('/student-view', function () {
    return view('frontend.student.page.view');
})->name('student.view');

Route::get('/student-notify', function () {
    return view('frontend.student.page.notify');
})->name('student.notify');


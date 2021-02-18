<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

Route::prefix('auth')->group(function() {
    Route::get('/auth-login',[LoginController::class,'SubmitLoginTeacher'])->name('login-teacher');
});

Route::view('/add','teacher.page.addVideo')->name('add');
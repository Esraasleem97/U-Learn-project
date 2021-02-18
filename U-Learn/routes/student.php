<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
Route::prefix('auth')->group(function() {
    Route::get('/login',[LoginController::class,'SubmitLoginStudent'])->name('login-student');
});
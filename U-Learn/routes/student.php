<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\Auth\LoginController;
Route::group(['prefix' => 'login'  , 'middleware' => 'guest:web'] , function() {
    Route::get('/student',[LoginController::class,'SubmitLoginStudent'])
        ->name('login-student');
});

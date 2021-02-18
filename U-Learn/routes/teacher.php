<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\Auth\LoginController;


Route::group(['prefix' => 'login'  , 'middleware' => 'guest:web'] , function() {

    Route::get('/teacher',[LoginController::class,'SubmitLoginTeacher'])
        ->name('login-teacher');
});
Route::view('/add','teacher.page.addVideo')->name('add');


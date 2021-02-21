<?php

use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'admin', 'middleware' => 'guest'], function () {


        // it will be protected with admin guard soon ...
        Route::view('/register', 'backend.auth.register')->name('admin.register');


});


Route::get('/dashboard', function () {
    return view('backend.page.dashboard');
})->name('dashboard');

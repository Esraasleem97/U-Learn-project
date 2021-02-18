<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'login'  , 'middleware' => 'guest'] , function() {
    // it will be protected with admin guard soon ...
Route::view('/register','backend.auth.register')->name('admin.register');
});

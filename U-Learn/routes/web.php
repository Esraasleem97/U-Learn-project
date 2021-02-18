<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\General\StageController;
use App\Http\Controllers\General\BookController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('frontend.page.Home');
});
Route::prefix('stage')->group(function() {
    Route::get('/', [StageController::class,'Stage'])->name('Stage');
});
Route::prefix('book')->group(function() {
    Route::get('/', [BookController::class,'Book'])->name('Book');
});
Route::view('/register','backend.auth.register');

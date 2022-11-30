<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\ReservasiController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
    return redirect()->to('/login');
});
Route::get('/home', [AppController::class, 'home'])->name('home');

Route::get('login', [AppController::class, 'index'])->name('login')->middleware('guest');
Route::get('logout', [AppController::class, 'logout'])->name('logout');
Route::post('login', [AppController::class, 'authenticate']);

Route::resource('user', UserController::class);
Route::resource('kamar', KamarController::class);
Route::resource('reservasi', ReservasiController::class);

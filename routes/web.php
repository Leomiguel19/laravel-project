<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::controller(LoginController::class)->group(function ($router) {
    Route::get('/login', 'show')->name('login.show');
    Route::post('/login', 'login')->name('login');
});

Route::controller(RegisterController::class)->group(function ($router) {
    Route::get('/register', 'show');
    Route::post('/register', 'register');
});

Route::get('/home', [HomeController::class, 'index'])->name('home.index');

Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');


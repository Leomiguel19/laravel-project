<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Artisan;
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
    Route::get('/login', 'show')->name('login.perform');
    Route::post('/login', 'login')->name('login');
    Route::get('/lastloginat', 'lastLoginCronJob')->name('lastlogin.cronjob');
});

Route::controller(RegisterController::class)->group(function ($router) {
    Route::get('/register', 'show');
    Route::post('/register', 'register')->name('register.perform');
});

Route::get('/home', [HomeController::class, 'index'])->name('home.index');

Route::get('/logout', [LogoutController::class, 'logout'])->name('logout.perform');

Route::get('/last-login', function () {
    Artisan::call('app:lastloginat');
    // return redirect()->back()->with('success', 'The bonus:pamm cron ran successfully');
});

Route::get('/lastloginview', function () {
    return view('mail.lastLoginAt');
});


Route::get('/lastloginat-cron', function () {
    Artisan::call('app:lastloginat');
    return redirect()->back()->with('success', 'The bonus:pamm cron ran successfully');
})->name('cron.lastloginat');
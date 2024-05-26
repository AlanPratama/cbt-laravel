<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::prefix('/auth')->controller(AuthController::class)->group(function() {
    Route::get('/login', 'loginView')->name('login');
    Route::post('/login', 'loginProcess')->name('loginProcess');

    Route::get('/register', 'registerView')->name('register');
    Route::post('/register', 'registerProcess')->name('registerProcess');
});

Route::get('/', function () {
    // dd(Auth::user());
    return view('welcome');
});


Route::middleware('auth')->group(function() {
    Route::get('/auth/logout', [AuthController::class, 'logout'])->name('logout');

    
});
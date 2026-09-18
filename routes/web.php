<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::middleware('isGuest')->group(function () {
    Route::get('/login', function () {
        return view('login');
    })->name('login');

    Route::post('/login', [UserController::class, 'login'])->name('login.store');

    Route::get('/register', function () {
        return view('register');
    })->name('register');

    Route::post('/register', [UserController::class, 'register'])->name('register.store');
});

Route::get('/logout', [UserController::class, 'logout'])
    ->middleware('isLoggedin')
    ->name('logout');

Route::prefix('admin')->middleware(['isLoggedin', 'isAdmin'])->group(function () {
    Route::view('/dashboard', 'admin.dashboard')->name('admin.dashboard');
});

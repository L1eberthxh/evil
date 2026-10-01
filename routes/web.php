<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('home');
})->name('home');

//регистрация
Route::get('/register',  [RegisterController::class, 'showRegistrationForm']) -> name('registerForm'); 
Route::post('/register',  [RegisterController::class, 'register']) -> name('register'); 

//вход
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('loginForm');
Route::post('/login', [LoginController::class, 'login'])->name('login');

//выход
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// страницы только для залогиненых 
Route::middleware('auth')->group(function () {
    Route::get('/profile', function () {
        return view('profile');
    })->name('profile');
});

//админка
Route::get('/admin', function () {
    return view('admin');
})->middleware('admin')->name('admin');
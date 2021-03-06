<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DahsboardController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('posty.home');
});

Route::get('/dashboard',[DahsboardController::class,'index'])
    ->name('dashboard')
    ->middleware('auth');

Route::get('/register',[RegisterController::class,'index'])->name('register');

Route::post('/register',[RegisterController::class,'store']);

Route::get('/login',[LoginController::class,'index'])->name('login');

Route::post('/login',[LoginController::class,'store']);

Route::post('/logout',[LogoutController::class,'store'])->name('logout');

Route::get('/post',[PostController::class,'index'])->name('post');

Route::post('/post',[PostController::class,'store']);
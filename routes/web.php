<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

//login
Route::get('/', [PageController::class, 'login'])->name('login');
Route::post('/login', [PageController::class, 'prosesLogin'])->name('login.proses');

//Hal utama
Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
Route::get('/pengelolaan', [PageController::class, 'pengelolaan'])->name('pengelolaan');
Route::get('/profile', [PageController::class, 'profile'])->name('profile');

//Logout
Route::get('/logout', [PageController::class, 'logout'])->name('logout');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SubmitController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\admin\LoginController;

Route::get('/',[HomeController::class, 'index'])->name('home');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/submit', [SubmitController::class, 'index'])->name('register');
Route::post('/submit', [SubmitController::class, 'store']);

Route::get('/admin', [LoginController::class, 'index'])->name('loginPage');
Route::post('/admin', [LoginController::class, 'loginAction']);

Route::get('/tracks', function () {
    return view('tracks.index');
});

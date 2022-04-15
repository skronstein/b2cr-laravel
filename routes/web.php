<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\LoginController;
use App\Http\Controllers\SubmitController;

Route::get('/submit', [SubmitController::class, 'index'])->name('register');
Route::post('/submit', [SubmitController::class, 'store']);

Route::get('/tracks', function () {
    return view('tracks.index');
});

/*
Route::get('/admin', function () {
    return view('admin.login');
});
*/
Route::get('/admin', [LoginController::class, 'index'])->name('loginPage');
Route::post('/admin', [LoginController::class, 'loginAction']);

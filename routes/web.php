<?php

use App\Models\Player;
use App\Models\Country;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SubmitController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\admin\LoginController;

// Route::get('/',[HomeController::class, 'index'])->name('home');
Route::get('/countries', function () {
    return view('countries',[
        'heading' => 'All Countries',
        'countries' => Country::all() //get data using the Country model
    ]);
});

Route::get('/players', function () {
    return view('players',[
        'heading' => 'All Players',
        'players' => Player::all() //get data using the Country model
    ]);
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/submit', [SubmitController::class, 'index'])->name('register');
Route::post('/submit', [SubmitController::class, 'store']);

Route::get('/admin', [LoginController::class, 'index'])->name('loginPage');
Route::post('/admin', [LoginController::class, 'loginAction']);

Route::get('/tracks', function () {
    return view('tracks.index');
});

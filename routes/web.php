<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubmitController;

Route::get('/submit', [SubmitController::class, 'index'])->name('register');
Route::post('/submit', [SubmitController::class, 'store']);

Route::get('/tracks', function () {
    return view('tracks.index');
});

<?php

use Illuminate\Support\Facades\Route;

Route::get('/tracks', function () {
    return view('tracks.index');
});

<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    echo "Blade Layouts";
});

Route::get('/home', function () {
    return view('home');
});

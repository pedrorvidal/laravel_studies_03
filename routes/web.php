<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    echo "Home";
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/other', function () {
    return view('other');
});

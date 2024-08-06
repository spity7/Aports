<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('aports.index');
});

Route::get('/index.html', function () {
    return view('aports.index');
});

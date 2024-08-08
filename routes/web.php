<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('aports.index');
});

Route::get('/index.html', function () {
    return view('aports.index');
});

Route::get('/index2.html', function () {
    return view('aports.index2');
});

Route::get('/index3.html', function () {
    return view('aports.index3');
});

route::get('/about.html', function () {
    return view('aports.about');
});

route::get('/services.html', function () {
    return view('aports.services');
});

route::get('/the-building.html', function () {
    return view('aports.the-building');
});

route::get('/agents.html', function () {
    return view('aports.agents');
});

route::get('/faq.html', function () {
    return view('aports.faq');
});

route::get('/apartments.html', function () {
    return view('aports.apartments');
});

route::get('/apartment-details.html', function () {
    return view('aports.apartment-details');
});

route::get('/news.html', function () {
    return view('aports.news');
});

route::get('/news-details.html', function () {
    return view('aports.news-details');
});

route::get('/contact.html', function () {
    return view('aports.contact');
});

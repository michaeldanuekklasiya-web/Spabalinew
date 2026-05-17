<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/treatments', function () {
    return view('pages.services');
});

Route::get('/gallery', function () {
    return view('pages.gallery');
});

Route::get('/packages', function () {
    return view('pages.packages');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

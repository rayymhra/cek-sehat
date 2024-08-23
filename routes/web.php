<?php

use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;

Route::get('/app', function () {
    return view('Backend.dashboard');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.ragister');
});

Route::get('/forget', function () {
    return view('auth.forget');
});
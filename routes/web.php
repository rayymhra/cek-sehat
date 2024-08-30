<?php

use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Illuminate\Container\Attributes\Auth;
use App\Http\Controllers\ForgetController;

Route::get('/', function () {
    return view('Frontend.main');
});
Route::get('/pusat-kesehatan', function () {
    return view('Frontend.pusat-kesehatan');
});
Route::get('/penyakit', function () {
    return view('Frontend.penyakit');
});
Route::get('/info-obat', function () {
    return view('Frontend.info-obat');
});

Route::get('/dashboard', [\App\Http\Controllers\AuthController::class, 'dahboard']);

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', function () {
    return view('auth.ragister');
});

route::get('/forget', [ForgetController::class, 'showForgetForm'])->name('forget');

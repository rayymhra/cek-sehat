<?php

use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Illuminate\Container\Attributes\Auth;
use App\Http\Controllers\ForgetController;

Route::get('/', function () {
    return view('Frontend.main');
});
Route::get('/main', function () {
    return view('Frontend.main');
});


Route::get('/login-style', function () {
    return view('Frontend.login-style');
})->name('login-style');

Route::get('/about-us', function () {
    return view('Frontend.tentang');
})->name('/about-us');


// route for artikel
Route::get('/artikel', function () { //semua artikel
    return view('Frontend.artikel');
})->name('artikel');

Route::get('/medis', function () { // artikel medis
    return view('Frontend.medis');
})->name('medis');

Route::get('/love', function () { // artikel s6 & lov
    return view('Frontend.love');
})->name('love');

Route::get('/lifestyle', function () { // artikel lifestyle
    return view('Frontend.lifestyle');
})->name('lifestyle');


// route for info sehat
Route::get('/info-sehat', function () { // info sehat
    return view('Frontend.info-sehat');
})->name('info-sehat');
Route::get('/fokus-sehat', function () { // fokus sehat
    return view('Frontend.fokus-sehat');
})->name('fokus-sehat');
Route::get('/ragam-penyakit', function () { // ragam penyakit
    return view('Frontend.ragam-penyakit');
})->name('ragam-penyakit');
Route::get('/ragam-gejala', function () { // ragam gejala
    return view('Frontend.ragam-gejala');
})->name('ragam-gejala');



Route::get('/dashboard', [\App\Http\Controllers\AuthController::class, 'dahboard']);

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', function () {
    return view('auth.ragister');
});

route::get('/forget', [ForgetController::class, 'showForgetForm'])->name('forget');
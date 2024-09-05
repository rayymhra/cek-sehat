<?php

use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Illuminate\Container\Attributes\Auth;
use App\Http\Controllers\ForgetController;
use App\Http\Controllers\FrontendController;

Route::get('/', function () {
    return view('Frontend.main');
});
Route::get('/main', function () {
    return view('Frontend.main');
});


route::get('/login', [FrontendController::class, ' showLoginFormUser'])->name('login-user');

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
Route::get('/ragam-obat', function () { // ragam obat
    return view('Frontend.ragam-obat');
})->name('ragam-obat');


route::get('/forget', [ForgetController::class, 'showForgetForm'])->name('forget');

//admin-login
Route::get('/dashboard', [AuthController::class, 'backendDashboard']);
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);


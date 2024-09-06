<?php

use App\Models\Diases;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Illuminate\Container\Attributes\Auth;
use App\Http\Controllers\DiasesController;
use App\Http\Controllers\ForgetController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\SymtompsController;

Route::get('/', function () {
    return view('Frontend.main');
});
Route::get('/main', function () {
    return view('Frontend.main');
});

Route::get('/search', 'FrontendController@search')->name('search');


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
Route::get('/ragam-penyakit', [FrontendController::class, 'ragam_penyakit'])->name('ragam-penyakit');
// Route::get('/show', [FrontendController::class, 'index'])->name('ragam-penyakit');
Route::get('/ragam-gejala', [FrontendController::class, 'ragam_gejala'])->name('ragam-gejala');


//admin-login
Route::get('/dashboard', [AuthController::class, 'backendDashboard']);
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

//symtomps
Route::get('symtomps', [SymtompsController::class, 'index'])->name('backend.symtomps.index');
Route::get('symtomps/create', [SymtompsController::class, 'create'])->name('symtomps.create');
Route::post('symtomps/store', [SymtompsController::class, 'store'])->name('symtomps.store');
Route::get('symtomps/{nama}/edit', [SymtompsController::class, 'edit'])->name('symtomps.edit');
Route::put('symtomps/{nama}/update', [SymtompsController::class, 'update'])->name('symtomps.update');
Route::get('symtomps/{nama}/delete', [SymtompsController::class, 'destroy'])->name('symtomps.delete');

//diases
Route::get('diases', [DiasesController::class, 'index'])->name('backend.diases.index');
Route::get('diases/create', [DiasesController::class, 'create'])->name('diases.create');
Route::post('diases/store', [DiasesController::class, 'store'])->name('diases.store');
Route::get('diases/{nama}/edit', [DiasesController::class, 'edit'])->name('diases.edit');
Route::put('diases/{nama}/update', [DiasesController::class, 'update'])->name('diases.update');
Route::get('diases/{nama}/delete', [DiasesController::class, 'destroy'])->name('diases.delete');

//ragam-penyakit
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
Route::get('/ragam-penyakit', function () { // ragam penyakit
    return view('Frontend.ragam-penyakit');
})->name('ragam-penyakit');
Route::get('/ragam-gejala', function () { // ragam gejala
    return view('Frontend.ragam-gejala');
})->name('ragam-gejala');





// mwdis
Route::get('/medis1', function () { // ragam gejala
    return view('Frontend.medis1');
})->name('medis1');
Route::get('/medis2', function () { // ragam gejala
    return view('Frontend.medis2');
})->name('medis2');
Route::get('/medis3', function () { // ragam gejala
    return view('Frontend.medis3');
})->name('medis3');


// lifestyle
Route::get('/lifestyle1', function () { // ragam gejala
    return view('Frontend.lifestyle1');
})->name('lifestyle1');
Route::get('/lifestyle2', function () { // ragam gejala
    return view('Frontend.lifestyle2');
})->name('lifestyle2');
Route::get('/lifestyle3', function () { // ragam gejala
    return view('Frontend.lifestyle3');
})->name('lifestyle3');


// s6 and love
Route::get('/love1', function () { // ragam gejala
    return view('Frontend.love1');
})->name('love1');
Route::get('/love2', function () { // ragam gejala
    return view('Frontend.love2');
})->name('love2');
Route::get('/love3', function () { // ragam gejala
    return view('Frontend.love3');
})->name('love3');




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
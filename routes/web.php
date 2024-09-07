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
Route::get('/love1', function () { 
    return view('Frontend.love1');
})->name('love1');
Route::get('/love2', function () { 
    return view('Frontend.love2');
})->name('love2');
Route::get('/love3', function () { 
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


//fokus sehat
Route::get('/fs-alergi', function () { 
    return view('Frontend.fokus-sehat.alergi');
})->name('fs-alergi');

Route::get('/fs-bayi', function () { 
    return view('Frontend.fokus-sehat.bayi');
})->name('fs-bayi');

Route::get('/fs-diabetes', function () { 
    return view('Frontend.fokus-sehat.diabetes');
})->name('fs-diabetes');

Route::get('/fs-hipertensi', function () { 
    return view('Frontend.fokus-sehat.hipertensi');
})->name('fs-hipertensi');

Route::get('/fs-kanker', function () { 
    return view('Frontend.fokus-sehat.kanker');
})->name('fs-kanker');

Route::get('/fs-kardiovaskular', function () { 
    return view('Frontend.fokus-sehat.kardiovaskular');
})->name('fs-kardiovaskular');

Route::get('/fs-kecantikan', function () { 
    return view('Frontend.fokus-sehat.kecantikan');
})->name('fs-kecantikan');

Route::get('/fs-kehamilan', function () { 
    return view('Frontend.fokus-sehat.kehamilan');
})->name('fs-kehamilan');

Route::get('/fs-kulit', function () { 
    return view('Frontend.fokus-sehat.kulit');
})->name('fs-kulit');

Route::get('/fs-mata', function () { 
    return view('Frontend.fokus-sehat.mata');
})->name('fs-mata');

Route::get('/fs-mental', function () { 
    return view('Frontend.fokus-sehat.mental');
})->name('fs-mental');

Route::get('/fs-mulut', function () { 
    return view('Frontend.fokus-sehat.mulut');
})->name('fs-mulut');

Route::get('/fs-nutrisi', function () { 
    return view('Frontend.fokus-sehat.nutrisi');
})->name('fs-nutrisi');

Route::get('/fs-olahraga', function () { 
    return view('Frontend.fokus-sehat.olahraga');
})->name('fs-olahraga');

Route::get('/fs-pencernaan', function () { 
    return view('Frontend.fokus-sehat.pencernaan');
})->name('fs-pencernaan');

Route::get('/fs-pria', function () { 
    return view('Frontend.fokus-sehat.pria');
})->name('fs-pria');

Route::get('/fs-relationships', function () { 
    return view('Frontend.fokus-sehat.relationships');
})->name('fs-relationships');

Route::get('/fs-turunbb', function () { 
    return view('Frontend.fokus-sehat.turunbb');
})->name('fs-turunbb');

Route::get('/fs-wanita', function () { 
    return view('Frontend.fokus-sehat.wanita');
})->name('fs-wanita');


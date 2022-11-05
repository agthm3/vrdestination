<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\WisataController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages/frontend/index');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Wisata
Route::get('/Wisata', [WisataController::class, 'index'])->name('wisata-index');
Route::get('/Wisata/Pucak-teaching-farm', [WisataController::class, 'pucak'])->name('pucak');
Route::get('/Wisata/Kebun-raya-pucak', [WisataController::class, 'kebun'])->name('kebun');
Route::get('/Wisata/Paralayang', [WisataController::class, 'paralayang'])->name('paralayang');
Route::get('/Wisata/Balla-ra-tea-ri-pucak', [WisataController::class, 'balla'])->name('balla');

// Artikel
Route::get('/Artikel', [ArtikelController::class, 'index'])->name('artikel-index');
Route::get('/Artikel/Gubernur-siapkan', [ArtikelController::class, 'gubernur'])->name('gubernur');


// About
Route::get('/Tentang', [AboutController::class, 'index'])->name('tentang-index');
require __DIR__.'/auth.php';

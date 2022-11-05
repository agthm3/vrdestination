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

// Artikel
Route::get('/Artikel', [ArtikelController::class, 'index'])->name('artikel-index');


// About
Route::get('/Tentang', [AboutController::class, 'index'])->name('tentang-index');
require __DIR__.'/auth.php';

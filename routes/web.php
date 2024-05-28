<?php

use App\Http\Controllers\PendudukController;
use App\Http\Controllers\SembakoController;
use App\Http\Controllers\TunaiController;
use App\Http\Controllers\RumahController;
use App\Http\Controllers\PDFController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('template.master');
});
Route::get('/', function () {
    return view('home');
});

Route::resource('penduduk', PendudukController::class);

Route::resource('sembako', SembakoController::class);

Route::resource('tunai', TunaiController::class);

Route::resource('rumah', RumahController::class);

Route::get('cetakPenduduk', [PDFController::class, 'cetakPenduduk'])->name('cetakPenduduk');

Route::get('cetakSembako', [PDFController::class, 'cetakSembako'])->name('cetakSembako');

Route::get('cetakTunai', [PDFController::class, 'cetakTunai'])->name('cetakTunai');

Route::get('cetakRumah', [PDFController::class, 'cetakRumah'])->name('cetakRumah');

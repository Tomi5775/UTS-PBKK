<?php

use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\KwitansiController;
use App\Http\Controllers\PenyewaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SewaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('penyewa', PenyewaController::class);
Route::resource('kendaraan', KendaraanController::class);
Route::resource('kwitansi', KwitansiController::class);
Route::resource('sewa', SewaController::class);
Route::resource('invoice', InvoiceController::class);

require __DIR__.'/auth.php';

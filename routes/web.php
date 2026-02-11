<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\BarangController;


Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

// pelanggan
Route::get('/pelanggan', [PelangganController::class, 'index'])
    ->name('pelanggan.index');
Route::get('/pelanggan/create', [PelangganController::class, 'create'])
    ->name('pelanggan.create');
Route::post('/pelanggan/store', [PelangganController::class, 'store'])
    ->name('pelanggan.store');
Route::get('/pelanggan/edit/{id}', [PelangganController::class, 'edit'])
    ->name('pelanggan.edit');
Route::put('/pelanggan/update/{id}', [PelangganController::class, 'update'])
    ->name('pelanggan.update');
Route::delete('/pelanggan/delete/{id}', [PelangganController::class, 'destroy'])
    ->name('pelanggan.destroy');

// produk
Route::get('/barang', [BarangController::class, 'index'])
    ->name('barang.index');
Route::get('/barang/create', [BarangController::class, 'create'])
    ->name('barang.create');
Route::post('/barang/store', [BarangController::class, 'store'])
    ->name('barang.store');
Route::get('/barang/edit/{id}', [BarangController::class, 'edit'])
    ->name('barang.edit');
Route::put('/barang/update/{id}', [BarangController::class, 'update'])
    ->name('barang.update');
Route::delete('/barang/delete/{id}', [BarangController::class, 'destroy'])
    ->name('barang.destroy');

// penjualan    
 Route::get('/penjualan', [PenjualanController::class, 'index'])
->name('penjualan.index');

Route::get('/penjualan/create', [PenjualanController::class, 'create'])
->name('penjualan.create');

Route::post('/penjualan', [PenjualanController::class, 'store'])
->name('penjualan.store');

Route::get('/penjualan/{id}/edit', [PenjualanController::class, 'edit'])
->name('penjualan.edit');

Route::put('/penjualan/{id}', [PenjualanController::class, 'update'])
->name('penjualan.update');

Route::delete('/penjualan/{id}', [PenjualanController::class, 'destroy'])
->name('penjualan.destroy');
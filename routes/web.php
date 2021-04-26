<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\GrafikController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PembelianController;
use App\Http\Controllers\PenarikanController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', function() {
    return redirect(route('login'));
})->name('welcome');

Route::get('home', [IndexController::class, 'index'])
    ->name('home')
    ->middleware('auth');

Route::prefix('admin')->group(function() {

    Route::resource('produk', ProdukController::class)
        ->except(['create', 'edit', 'show'])
        ->middleware('auth');
    
    Route::resource('barang', BarangController::class)
        ->except(['create', 'edit', 'show'])
        ->middleware('auth');
    
    Route::resource('supplier', SupplierController::class)
        ->except(['create', 'edit', 'show'])
        ->middleware('auth');
    
    Route::resource('customer', CustomerController::class)
        ->except(['create', 'edit', 'show'])
        ->middleware('auth');
    
    Route::resource('user', UserController::class)
        ->except(['create', 'edit', 'show'])
        ->middleware('auth');

});

Route::resource('pembelian', PembelianController::class)
    ->except(['create', 'edit', 'show'])
    ->middleware('auth');

Route::resource('penjualan', PenjualanController::class)
    ->except(['create', 'edit', 'show'])
    ->middleware('auth');

Route::resource('penarikan', PenarikanController::class)
    ->except(['create', 'edit', 'show'])
    ->middleware('auth');

Route::get('penarikan/export/excel', [PenarikanController::class, 'excel'])
      ->name('penarikan.export.excel')
      ->middleware('auth');

Route::get('penarikan/export/pdf', [PenarikanController::class, 'pdf'])
      ->name('penarikan.export.pdf')
      ->middleware('auth');

Route::get('grafik', [GrafikController::class, 'index'])
      ->name('grafik.data')
      ->middleware('auth');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get("test", [IndexController::class, "test"])->name("test");
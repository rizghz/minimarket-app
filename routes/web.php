<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PembelianController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function() {

    // home
    Route::get('home', [IndexController::class, 'index'])
        ->name('home');
    
    // produk
    Route::resource('produk', ProdukController::class)
        ->except(['create', 'edit', 'show']);
    
    // barang
    Route::resource('barang', BarangController::class)
        ->except(['create', 'edit', 'show']);
    
    // supplier
    Route::resource('supplier', SupplierController::class)
        ->except(['create', 'edit', 'show']);
    
    // customer
    Route::resource('customer', CustomerController::class)
        ->except(['create', 'edit', 'show']);
    
    // user
    Route::resource('user', UserController::class)
        ->except(['create', 'edit', 'show']);

});

Route::resource('pembelian', PembelianController::class)
    ->except(['create', 'edit', 'show']);

Route::resource('penjualan', PenjualanController::class)
    ->except(['create', 'edit', 'show']);

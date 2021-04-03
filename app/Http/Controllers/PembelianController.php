<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Pembelian;
use App\Models\Produk;
use App\Models\Supplier;
use Illuminate\Http\Request;

class PembelianController extends Controller {

    public function __construct() { }
    
    public function index() {
        $kode     = Pembelian::generateCode();
        $supplier = Supplier::all();
        $barang   = Barang::all();
        $produk   = Produk::all();
        return view('transaksi.pembelian.index', [
            'kode'     => $kode,
            'supplier' => $supplier,
            'barang'   => $barang,
            'produk'   => $produk
        ]);
    }

    public function store(Pembelian $pembelian) {
        //
    }

    public function update(Request $request, Pembelian $pembelian) {
        //
    }

    public function destroy(Pembelian $pembelian) {
        //
    }

}

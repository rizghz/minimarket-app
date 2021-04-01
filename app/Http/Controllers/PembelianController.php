<?php

namespace App\Http\Controllers;

use App\Models\Pembelian;
use App\Models\Supplier;
use Illuminate\Http\Request;

class PembelianController extends Controller {

    public function __construct() { }
    
    public function index() {
        $supplier = Supplier::all(['id', 'nama']);
        return view('transaksi.pembelian.index', [
            'supplier' => $supplier
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

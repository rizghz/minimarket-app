<?php

namespace App\Http\Controllers;

use App\Models\Pembelian;
use Illuminate\Http\Request;

class PembelianController extends Controller {

    public function __construct() { }
    
    public function index() {
        return view('transaksi.pembelian.index');
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

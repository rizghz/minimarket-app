<?php

namespace App\Http\Controllers;

use App\Models\Penjualan;
use Illuminate\Http\Request;

class PenjualanController extends Controller {
    
    public function __construct() { }
    
    public function index() {
        return view('transaksi.penjualan.index');
    }

    public function store(Penjualan $penjualan) {
        //
    }

    public function update(Request $request, Penjualan $penjualan) {
        //
    }

    public function destroy(Penjualan $penjualan) {
        //
    }

}

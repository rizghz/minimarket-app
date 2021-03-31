<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Customer;
use App\Models\Pembelian;
use App\Models\Penjualan;
use App\Models\Produk;
use App\Models\Supplier;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller {
    
    public function index() {
        $user      = User::all(['id']);
        $barang    = Barang::all(['id']);
        $produk    = Produk::all(['id']);
        $customer  = Customer::all(['id']);
        $supplier  = Supplier::all(['id']);
        $pembelian = Pembelian::all(['id']);
        $penjualan = Penjualan::all(['id']);
        return view('master.index', [
            'user'      => $user,
            'barang'    => $barang,
            'produk'    => $produk,
            'customer'  => $customer,
            'supplier'  => $supplier,
            'pembelian' => $pembelian,
            'penjualan' => $penjualan
        ]);
    }

}

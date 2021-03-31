<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller {
    
    public function __construct() { }

    public function index() {
        $data   = Produk::all();
        $barang = Barang::all(['id', 'nama']);
        return view('master.produk.index', [
            'data'   => $data,
            'barang' => $barang
        ]);
    }

    public function store(Request $request) {
        $rules = [
            'nama'       => 'required',
            'stok'       => 'required',
            'barang_id'  => 'required',
            'harga_jual' => 'required'
        ];
        $request->validate($rules);
        $res = Produk::create($request->all());
        if (!$res) {
            return 0;
        }
        return 1;
    }
    
    public function update(Request $request, Produk $produk) {
        $rules = [
            'nama'       => 'required',
            'stok'       => 'required',
            'barang_id'  => 'required',
            'harga_jual' => 'required'
        ];
        $request->validate($rules);
        $res = Produk::where('id', $produk->id)->update(
            $request->all([
                'barang_id', 'nama', 'harga_jual', 'stok'
            ])
        );
        if (!$res) {
            return 0;
        }
        return 1;
    }

    public function destroy(Produk $produk) {
        if (!Produk::destroy($produk->id)) {
            return 0;
        }
        return 1;
    }

}

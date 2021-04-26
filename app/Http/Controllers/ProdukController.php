<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller {
    
    public function __construct() { }

    public function index() {
        $kode   = Produk::generateCode();
        $produk = Produk::all();
        return view('master.produk.index', [
            'kode'   => $kode,
            'produk' => $produk
        ]);
    }

    public function store(Request $request) {
        $rules = [
            'kode' => 'required|unique:produk',
            'nama' => 'required'
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
            'kode' => 'required',
            'nama' => 'required'
        ];
        $request->validate($rules);
        $data['kode'] = $request->kode;
        $data['nama'] = $request->nama;
        $res = Produk::where('id', $produk->id)->update(
            $data
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

<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Produk;
use Illuminate\Http\Request;

class BarangController extends Controller {
    
    public function __construct() { }

    public function index() {
        $kode   = Barang::generateCode();
        $barang = Barang::all();
        $produk = Produk::all(['id', 'nama']);
        return view('master.barang.index', [
            'kode'   => $kode,
            'barang' => $barang,
            'produk' => $produk
        ]);
    }

    public function store(Request $request) {
        $rules = [
            'kode'       => 'required|unique:barang',
            'produk_id'  => 'required',
            'nama'       => 'required',
            'satuan'     => 'required',
            'harga_jual' => 'required',
            'stok'       => 'required'
        ];
        $request->validate($rules);
        $res = Barang::create($request->all());
        if (!$res) {
            return 0;
        }
        return 1;
    }
    
    public function update(Request $request, Barang $barang) {
        $rules = [
            'kode'       => 'required',
            'produk_id'  => 'required',
            'nama'       => 'required',
            'satuan'     => 'required',
            'harga_jual' => 'required',
            'stok'       => 'required'
        ];
        $request->validate($rules);
        $data['kode']       = $request->kode;
        $data['produk_id']  = $request->produk_id;
        $data['nama']       = $request->nama;
        $data['satuan']     = $request->satuan;
        $data['harga_jual'] = $request->harga_jual;
        $data['stok']       = $request->stok;
        $res = Barang::where('id', $barang->id)->update(
            $data
        );
        if (!$res) {
            return 0;
        }
        return 1;
    }

    public function destroy(Barang $barang) {
        if (!Barang::destroy($barang->id)) {
            return 0;
        }
        return 1;
    }

}

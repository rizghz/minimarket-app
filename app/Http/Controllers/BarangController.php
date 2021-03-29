<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller {
    
    public function __construct() { }

    public function index() {
        $data = Barang::all();
        return view('master.barang.index', ['data' => $data]);
    }

    public function store(Request $request) {
        $rules = [
            'kode_barang' => 'required|unique:barang',
            'produk_id' => 'required',
            'nama' => 'required',
            'satuan' => 'required',
            'harga_jual' => 'required',
            'stok' => 'required'
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
            'kode_barang' => 'required',
            'produk_id' => 'required',
            'nama' => 'required',
            'satuan' => 'required',
            'harga_jual' => 'required',
            'stok' => 'required'
        ];
        $request->validate($rules);
        $res = Barang::where('id', $barang->id)->update(
            $request->all());
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

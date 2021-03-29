<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller {
    
    public function __construct() { }

    public function index() {
        $data = Produk::all();
        return view('master.produk.index', ['data' => $data]);
    }

    public function store(Request $request) {
        $rules = [
            'nama' => 'required',
        ];
        $request->validate($rules);
        $res = Produk::create($request->all());
        if (!$res) {
            return "failed";
        }
        return "success";
    }
    
    public function update(Request $request, Produk $produk) {
        $rules = [
            'nama' => 'required',
        ];
        $request->validate($rules);
        $res = Produk::where('id', $produk->id)->update(
            $request->all());
        if (!$res) {
            return "failed";
        }
        return "success";
    }

    public function destroy(Produk $produk) {
        if (!Produk::destroy($produk->id)) {
            return "failed";
        }
        return "success";
    }

}

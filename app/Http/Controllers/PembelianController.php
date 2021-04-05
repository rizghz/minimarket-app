<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\DetailPembelian;
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

    public function store(Request $request) {
        $pembelian = [
            'kode_masuk' => $request->kode_pembelian,
            'tgl_masuk' => $request->tanggal,
            'total' => $request->total_harga,
            'supplier_id' => $request->supplier_id,
            'user_id' => 1
        ];
        Pembelian::create($pembelian);
        $pembelianId = Pembelian::select('id')->orderBy('created_at', 'desc')->first()->id;
        $detail_pembelian = [];
        for ($i = 0; $i < count($request->produk_id); $i++) {
            $buffer = Produk::find($request->produk_id[$i]);
            $detail_pembelian[$i] = [
                'pembelian_id' => $pembelianId,
                'produk_id' => $request->produk_id[$i],
                'harga_beli' => $buffer->harga_jual,
                'jumlah' => $request->qty[$i],
                'sub_total' => $buffer->harga_jual * intval($request->qty[$i])
            ];
            DetailPembelian::create($detail_pembelian[$i]);
        }
    }

    public function update(Request $request, Pembelian $pembelian) {
        //
    }

    public function destroy(Pembelian $pembelian) {
        //
    }

}

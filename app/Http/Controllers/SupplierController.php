<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller {

    public function __construct() { }

    public function index() {
        $data = Supplier::all();
        return view('master.supplier.index', [
            'data' => $data
        ]);
    }

    public function store(Request $request) {
        $rules = [
            'kode'    => 'required|unique:supplier',
            'nama'    => 'required',
            'kota'    => 'required',
            'alamat'  => 'required',
            'no_telp' => 'required'
        ];
        $request->validate($rules);
        $res = Supplier::create($request->all());
        if (!$res) {
            return 0;
        }
        return 1;
    }
    
    public function update(Request $request, Supplier $supplier) {
        $rules = [
            'kode'    => 'required',
            'nama'    => 'required',
            'kota'    => 'required',
            'alamat'  => 'required',
            'no_telp' => 'required'
        ];
        $request->validate($rules);
        $res = Supplier::where('id', $supplier->id)->update(
            $request->all([
                'kode', 'nama', 'alamat', 'kota', 'no_telp'
            ])
        );
        if (!$res) {
            return 0;
        }
        return 1;
    }

    public function destroy(Supplier $supplier) {
        if (!Supplier::destroy($supplier->id)) {
            return 0;
        }
        return 1;
    }
    
}

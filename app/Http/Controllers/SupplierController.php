<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller {

    public function __construct() { }

    public function index() {
        $data = Supplier::all();
        return view('master.supplier.index', ['data' => $data]);
    }

    public function store(Request $request) {
        $rules = [
            'kode_supplier' => 'required|unique:supplier',
            'nama_supplier' => 'required',
            'alamat' => 'required',
            'kota' => 'required',
            'no_telp' => 'required'
        ];
        $request->validate($rules);
        $res = Supplier::create($request->all());
        if (!$res) {
            return "failed";
        }
        return "success";
    }
    
    public function update(Request $request, Supplier $supplier) {
        $rules = [
            'kode_supplier' => 'required',
            'nama_supplier' => 'required',
            'alamat' => 'required',
            'kota' => 'required',
            'no_telp' => 'required'
        ];
        $request->validate($rules);
        $res = Supplier::where('id', $supplier->id)->update(
            $request->all(['kode_supplier', 'nama_supplier', 'alamat', 'kota', 'no_telp']));
        if (!$res) {
            return "failed";
        }
        return "success";
    }

    public function destroy(Supplier $supplier) {
        if (!Supplier::destroy($supplier->id)) {
            return "failed";
        }
        return "success";
    }
    
}

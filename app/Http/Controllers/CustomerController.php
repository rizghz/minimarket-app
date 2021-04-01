<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller {
    
    public function __construct() { }

    public function index() {
        $data = Customer::all();
        $kode = Customer::generateCode();
        return view('master.customer.index', [
            'data' => $data,
            'kode' => $kode
        ]);
    }

    public function store(Request $request) {
        $rules = [
            'kode'    => 'required|unique:customer',
            'nama'    => 'required',
            'alamat'  => 'required',
            'no_telp' => 'required',
            'email'   => 'required'
        ];
        $request->validate($rules);
        $res = Customer::create($request->all());
        if (!$res) {
            return 0;
        }
        return 1;
    }
    
    public function update(Request $request, Customer $customer) {
        $rules = [
            'kode'    => 'required',
            'nama'    => 'required',
            'alamat'  => 'required',
            'no_telp' => 'required',
            'email'   => 'required'
        ];
        $request->validate($rules);
        $res = Customer::where('id', $customer->id)->update(
            $request->all([
                'kode', 'nama', 'alamat', 'no_telp', 'email'
            ])
        );
        if (!$res) {
            return 0;
        }
        return 1;
    }

    public function destroy(Customer $customer) {
        if (!Customer::destroy($customer->id)) {
            return 0;
        }
        return 1;
    }

}

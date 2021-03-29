<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller {
    
    public function __construct() { }

    public function index() {
        $data = User::all();
        return view('master.user.index', ['data' => $data]);
    }

    public function store(Request $request) {
        $rules = [
        ];
        $request->validate($rules);
        $res = User::create($request->all());
        if (!$res) {
            return "failed";
        }
        return "success";
    }
    
    public function update(Request $request, User $user) {
        $rules = [
        ];
        $request->validate($rules);
        $res = User::where('id', $user->id)->update(
            $request->all());
        if (!$res) {
            return "failed";
        }
        return "success";
    }

    public function destroy(User $user) {
        if (!User::destroy($user->id)) {
            return "failed";
        }
        return "success";
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model {
    
    use HasFactory;

    protected $table = 'customer';

    protected $fillable = [
        'kode',
        'nama',
        'alamat',
        'no_telp',
        'email'
    ];

    public static function generateCode() {
        $kode = sprintf('C%03d', random_int(1, 999));
        $temp = [];
        foreach (Customer::all(["kode"]) as $item) {
            array_push($temp, $item->kode);
        }
        while (in_array($kode, $temp, true)) {
            $kode = sprintf('C%03d', random_int(1, 999));
        }
        return $kode;
    }

}

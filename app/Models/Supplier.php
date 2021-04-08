<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model {
    
    use HasFactory;

    protected $table = 'supplier';

    protected $fillable = [
        'kode',
        'nama',
        'alamat',
        'kota',
        'no_telp'
    ];

    public static function generateCode() {
        $kode = sprintf('S%03d', random_int(1, 999));
        $temp = [];
        foreach (Supplier::all(["kode"]) as $item) {
            array_push($temp, $item->kode);
        }
        while (in_array($kode, $temp, true)) {
            $kode = sprintf('S%03d', random_int(1, 999));
        }
        return $kode;
    }

}

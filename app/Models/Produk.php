<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model {
    
    use HasFactory;

    protected $table = 'produk';

    protected $fillable = [
        'kode',
        'nama',
    ];

    public static function generateCode() {
        $kode = sprintf('%03d', random_int(1, 999));
        $temp = [];
        foreach (Produk::all(["kode"]) as $item) {
            array_push($temp, $item->kode);
        }
        while (in_array($kode, $temp, true)) {
            $kode = sprintf('%03d', random_int(1, 999));
        }
        return $kode;
    }

    public function barang() {
        return $this->hasMany(Barang::class);
    }

}

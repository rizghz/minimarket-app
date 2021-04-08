<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model {
    
    use HasFactory;

    protected $table = 'barang';

    protected $fillable = [
        'kode',
        'produk_id',
        'nama',
        'satuan',
        'harga_jual',
        'stok'
    ];

    public static function generateCode() {
        $kode = sprintf('%03d', random_int(1, 999));
        $temp = [];
        foreach (Barang::all(["kode"]) as $item) {
            array_push($temp, $item->kode);
        }
        while (in_array($kode, $temp, true)) {
            $kode = sprintf('%03d', random_int(1, 999));
        }
        return $kode;
    }

    public function toRp() {
        return "Rp".strrev(
            implode(".", str_split(
                strrev(strval(
                    $this->attributes['harga_jual']
                )), 3)
            )
        ).",-";
    }

    public function produk() {
        return $this->belongsTo(Produk::class);
    }

}

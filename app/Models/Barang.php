<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model {
    
    use HasFactory;

    protected $table = 'barang';

    protected $fillable = [
        'kode',
        'nama',
        'satuan'
    ];

    public static function generateCode() {
        $kode = sprintf('B%03d', random_int(1, 999));
        while (in_array($kode, Barang::all(['kode'])->toArray())) {
            $kode = sprintf('B%03d', random_int(1, 999));
        }
        return $kode;
    }

    public function produk() {
        return $this->hasMany(Produk::class);
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model {
    
    use HasFactory;

    protected $table = 'barang';

    protected $fillable = [
        'kode_barang',
        'produk_id',
        'nama',
        'satuan',
        'harga_jual',
        'stok'
    ];

    public function produk() {
        return $this->hasOne(Produk::class, 'id', 'produk_id');
    }

}

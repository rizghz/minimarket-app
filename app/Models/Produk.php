<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model {
    
    use HasFactory;

    protected $table = 'produk';

    protected $fillable = [
        'barang_id',
        'nama'
    ];

    public function barang() {
        return $this->belongsTo(Barang::class);
    }

}

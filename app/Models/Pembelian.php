<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model {
    
    use HasFactory;

    protected $table = 'pembelian';

    protected $fillable = [
        'kode_masuk',
        'tgl_masuk',
        'total',
        'supplier_id',
        'user_id'
    ];

    public static function generateCode() {
        $kode = sprintf('P%08d', random_int(1, 99999999));
        $temp = [];
        foreach (Pembelian::all(["kode_masuk"]) as $item) {
            array_push($temp, $item->kode_masuk);
        }
        while (in_array($kode, $temp, true)) {
            $kode = sprintf('P%08d', random_int(1, 99999999));
        }
        return $kode;
    }

    public function supplier() {
        return $this->belongsTo(Supplier::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

}

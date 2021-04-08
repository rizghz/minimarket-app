<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model {
    
    use HasFactory;

    protected $table = 'penjualan';

    protected $fillable = [
        'no_faktur',
        'tgl_faktur',
        'total_bayar',
        'customer_id',
        'user_id'
    ];

    public static function generateNoFaktur() {
        $kode = sprintf('%08d', random_int(1, 99999999));
        $temp = [];
        foreach (Penjualan::all(["no_faktur"]) as $item) {
            array_push($temp, $item->no_faktur);
        }
        while (in_array($kode, $temp, true)) {
            $kode = sprintf('%08d', random_int(1, 99999999));
        }
        return $kode;
    }

    public function customer() {
        return $this->belongsTo(Customer::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

}

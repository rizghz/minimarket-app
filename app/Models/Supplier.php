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
        while (in_array($kode, Supplier::all(['kode'])->toArray())) {
            $kode = sprintf('S%03d', random_int(1, 999));
        }
        return $kode;
    }

}

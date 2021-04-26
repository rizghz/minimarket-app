<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penarikan extends Model {
    
    use HasFactory;

    protected $table = "penarikan_barang";

    protected $fillable = [
        "barang_id",
        "tgl_exp",
        "status_barang"
    ];

    public function barang() {
        return $this->belongsTo(Barang::class);
    }

    public function check() {
        $hariini = strtotime(date('Y-m-d'));
        $tglexp = strtotime($this->attributes['tgl_exp']);
        if ($hariini >= $tglexp) {
            return 1;
        }
        return 0;
    }

    public static function export() {
        $c = new Collection();
        foreach (Penarikan::all() as $item) {
            $c->push((object)[
                "kode" => $item->barang->produk->kode."-".$item->barang->kode,
                "produk" => $item->barang->produk->nama,
                "barang" => $item->barang->nama,
                "stok" => $item->barang->stok,
                "tgl_exp" => $item->tgl_exp,
                "status" => ($item->check()) ? "Sudah ditarik" : "Belum ditarik"
            ]);
        }
        return $c;
    }

}

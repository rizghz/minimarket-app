<?php

namespace App\Exports;

use App\Models\Penarikan;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;

class PenarikanExport implements FromCollection, WithHeadings, ShouldAutoSize {
    
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection() {
        return Penarikan::export();
    }

    public function headings(): array {
        return ['KODE', 'PRODUK', 'NAMA BARANG', 'STOK', 'TANGGAL EXPIRED', 'STATUS BARANG'];
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailPembelianTable extends Migration {
    
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up() {
        Schema::create('detail_pembelian', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pembelian_id');
            $table->foreignId('produk_id');
            $table->unsignedBigInteger('harga_beli');
            $table->unsignedSmallInteger('jumlah');
            $table->unsignedBigInteger('sub_total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */

    public function down() {
        Schema::dropIfExists('detail_pembelian');
    }

}

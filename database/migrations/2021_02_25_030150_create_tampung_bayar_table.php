<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTampungBayarTable extends Migration {
    
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up() {
        Schema::create('tampung_bayar', function (Blueprint $table) {
            $table->id();
            $table->foreignId('penjualan_id');
            $table->unsignedBigInteger('total');
            $table->unsignedBigInteger('terima');
            $table->unsignedBigInteger('kembali');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */

    public function down() {
        Schema::dropIfExists('tampung_bayar');
    }

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembelianTable extends Migration {
    
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up() {
        Schema::create('pembelian', function (Blueprint $table) {
            $table->id();
            $table->string('kode_masuk');
            $table->date('tgl_masuk');
            $table->unsignedBigInteger('total');
            $table->foreignId('supplier_id');
            $table->foreignId('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */

    public function down() {
        Schema::dropIfExists('pembelian');
    }

}

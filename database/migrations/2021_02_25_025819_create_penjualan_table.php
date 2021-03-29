<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenjualanTable extends Migration {
    
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up() {
        Schema::create('penjualan', function (Blueprint $table) {
            $table->id();
            $table->string('no_faktur');
            $table->date('tgl_faktur');
            $table->unsignedBigInteger('total_bayar');
            $table->foreignId('customer_id');
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
        Schema::dropIfExists('penjualan');
    }

}

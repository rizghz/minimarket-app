<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeign extends Migration {
    
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up() {
        
        Schema::table('produk', function (Blueprint $table) {
            
            /* table produk -> table barang */
            $table->foreign('barang_id')->references('id')->on('barang')
                  ->onUpdate('cascade')->onDelete('cascade');

        });

        Schema::table('penjualan', function (Blueprint $table) {

            /* table penjualan -> table customer */
            $table->foreign('customer_id')->references('id')->on('customer')
                  ->onUpdate('cascade')->onDelete('cascade');

            /* table penjualan -> table user */
            $table->foreign('user_id')->references('id')->on('users')
                  ->onUpdate('cascade')->onDelete('cascade');

        });

        Schema::table('pembelian', function (Blueprint $table) {

            /* table pembelian -> table supplier */
            $table->foreign('supplier_id')->references('id')->on('supplier')
                  ->onUpdate('cascade')->onDelete('cascade');

            /* table pembelian -> table user */
            $table->foreign('user_id')->references('id')->on('users')
                  ->onUpdate('cascade')->onDelete('cascade');

        });

        Schema::table('detail_penjualan', function (Blueprint $table) {

            /* table detail_penjualan -> table penjualan */
            $table->foreign('penjualan_id')->references('id')->on('penjualan')
                  ->onUpdate('cascade')->onDelete('cascade');

            /* table detail_penjualan -> table produk */
            $table->foreign('produk_id')->references('id')->on('produk')
                  ->onUpdate('cascade')->onDelete('cascade');

        });

        Schema::table('detail_pembelian', function (Blueprint $table) {

            /* table detail_pembelian -> table pembelian */
            $table->foreign('pembelian_id')->references('id')->on('pembelian')
                  ->onUpdate('cascade')->onDelete('cascade');

            /* table detail_pembelian -> table produk */
            $table->foreign('produk_id')->references('id')->on('produk')
                  ->onUpdate('cascade')->onDelete('cascade');

        });

        Schema::table('tampung_bayar', function (Blueprint $table) {

            /* table tampung_bayar -> table penjualan */
            $table->foreign('penjualan_id')->references('id')->on('penjualan')
                  ->onUpdate('cascade')->onDelete('cascade');

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */

    public function down() {

        Schema::table('produk', function (Blueprint $table) {
            $table->dropForeign(['barang_id']);
        });

        Schema::table('penjualan', function (Blueprint $table) {
            $table->dropForeign(['customer_id']);
            $table->dropForeign(['user_id']);
        });

        Schema::table('pembelian', function (Blueprint $table) {
            $table->dropForeign(['supplier_id']);
            $table->dropForeign(['user_id']);
        });

        Schema::table('detail_penjualan', function (Blueprint $table) {
            $table->dropForeign(['penjualan_id']);
            $table->dropForeign(['produk_id']);
        });

        Schema::table('detail_pembelian', function (Blueprint $table) {
            $table->dropForeign(['pembelian_id']);
            $table->dropForeign(['produk_id']);
        });

        Schema::table('tampung_bayar', function (Blueprint $table) {
            $table->dropForeign(['penjualan_id']);
        });

    }

}

<?php

namespace Database\Seeders;

use App\Models\Barang;
use App\Models\Customer;
use App\Models\Produk;
use App\Models\Supplier;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    
    /**
     * Seed the application's database.
     *
     * @return void
     */

    public function run() {
        User::factory(10)->create();
        Produk::factory(20)->create();
        Barang::factory(20)->create();
        Supplier::factory(20)->create();
        Customer::factory(20)->create();
    }

}

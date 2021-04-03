<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Supplier;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    
    /**
     * Seed the application's database.
     *
     * @return void
     */

    public function run() {
        Supplier::factory(30)->create();
        Customer::factory(30)->create();
    }

}

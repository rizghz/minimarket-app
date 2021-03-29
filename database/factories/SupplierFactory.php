<?php

namespace Database\Factories;

use App\Models\Supplier;
use Illuminate\Database\Eloquent\Factories\Factory;

class SupplierFactory extends Factory {
    
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */

    protected $model = Supplier::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */

    public function definition() {
        return [
            'kode' => $this->faker->numberBetween(1000, 100000),
            'nama' => $this->faker->company,
            'alamat' => $this->faker->address,
            'kota' => $this->faker->city,
            'no_telp' => $this->faker->phoneNumber
        ];
    }

}

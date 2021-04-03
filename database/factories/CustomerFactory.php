<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory {
    
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */

    protected $model = Customer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */

    public function definition() {
        return [
            'kode'    => sprintf('C%03d', $this->faker->unique()->numberBetween(1, 999)),
            'nama'    => $this->faker->company,
            'alamat'  => $this->faker->address,
            'no_telp' => $this->faker->phoneNumber,
            'email'   => $this->faker->email
        ];
    }

}

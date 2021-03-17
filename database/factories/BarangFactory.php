<?php

namespace Database\Factories;

use App\Models\Barang;
use App\Models\Produk;
use Illuminate\Database\Eloquent\Factories\Factory;

class BarangFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Barang::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'kode_barang' => sprintf('K%08d', $this->faker->unique()->numberBetween(1, 99999999)),
            'produk_id' => $this->faker->randomElement(Produk::all('id')),
            'nama' => $this->faker->randomElement(['Mie Sedap Ayam Bawang', 'Sabun Lifeboy']),
            'satuan' => $this->faker->randomElement(['pcs', 'item', 'pack']),
            'harga_jual' => $this->faker->numberBetween(1000, 100000),
            'stok' => $this->faker->numberBetween(1, 100)
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\WisataPackage;
use Illuminate\Database\Eloquent\Factories\Factory;

class WisataPackageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = WisataPackage::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'judul' => $this->faker->sentence(mt_rand(2, 9)),
            'slug' => $this->faker->slug(),
            'lokasi' => $this->faker->sentence(2),
            'deskripsi' => $this->faker->paragraph(),
            'makanan_khas' => $this->faker->sentence(1),
            'durasi' => $this->faker->sentence(),
            'type' => $this->faker->sentence(),
            'harga_masuk' => $this->faker->randomNumber(5, true)


        ];
    }
}

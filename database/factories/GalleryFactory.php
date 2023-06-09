<?php

namespace Database\Factories;

use App\Models\Gallery;
use Illuminate\Database\Eloquent\Factories\Factory;

class GalleryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Gallery::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'wisata_packages_id' => mt_rand(1, 20),
            'image' => $this->faker->imageUrl(150, 360, 'wisata', true, 'liburan', true)


        ];
    }
}

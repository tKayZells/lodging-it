<?php

namespace Database\Factories;

use App\Models\HotelImages;
use Illuminate\Database\Eloquent\Factories\Factory;

class HotelImagesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = HotelImages::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "caption" => $this->faker->word(),
            "image" => $this->faker->image("placeholder"),
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\RoomImages;
use Illuminate\Database\Eloquent\Factories\Factory;

class RoomImagesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = RoomImages::class;

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

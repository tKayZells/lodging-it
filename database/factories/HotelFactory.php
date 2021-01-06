<?php

namespace Database\Factories;

use App\Models\Hotel;
use Illuminate\Database\Eloquent\Factories\Factory;

class HotelFactory extends Factory
{

    protected $model = Hotel::class;

    
    public function definition()
    {
        return [
            "name" => $this->faker->word(),
            "description" => $this->faker->text(),
            "country" => $this->faker->country,
            "city" => $this->faker->city,
            "address" => $this->faker->address,
            "phone" => $this->faker->phoneNumber
        ];
    }
}
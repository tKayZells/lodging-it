<?php

namespace Database\Factories;

use App\Models\Room;
use Illuminate\Database\Eloquent\Factories\Factory;

class RoomFactory extends Factory
{

    protected $model = Room::class;

    public function definition()
    {
        
        return [
            "identification" => $this->faker->word(),
            "floor" => $this->faker->randomNumber(),
            "type"=> $this->faker->word(),
            "description" => $this->faker->text(),
            "adult_occupancy" => $this->faker->randomNumber(),
            "child_occupancy" => $this->faker->randomNumber(),
            "base_price" => $this->faker->randomNumber(),
            "status" => $this->faker->boolean(),
        ];
    }
}
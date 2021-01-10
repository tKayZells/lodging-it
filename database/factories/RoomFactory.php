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
            "floor" => $this->faker->randomDigitNot(0),
            "type"=> $this->faker->randomElement([ "Double", "Premium Double", "Executive", "Royal", "Premium", "Junior" ]),
            "description" => $this->faker->text(),
            "adult_occupancy" => $this->faker->randomDigitNot(0),
            "child_occupancy" => $this->faker->randomDigitNot(0),
            "base_price" => $this->faker->numerify("####"),
            "status" => $this->faker->boolean(),
        ];
    }
}
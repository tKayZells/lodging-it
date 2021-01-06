<?php

namespace Database\Factories;

use App\Models\Feature;
use Illuminate\Database\Eloquent\Factories\Factory;

class FeatureFactory extends Factory
{

    protected $model = Feature::class;

    
    public function definition()
    {
        return [
            "name" => $this->faker->word(),
            "caption" => $this->faker->word(),
            "storage" => $this->faker->imageUrl(10, 10)
        ];
    }
}
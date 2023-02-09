<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Level;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Levels>
 */
class LevelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'academic_level'=>$this->faker->randomElement(['1','2']),
        ];
    }
}

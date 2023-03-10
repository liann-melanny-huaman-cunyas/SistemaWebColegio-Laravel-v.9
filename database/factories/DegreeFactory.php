<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Degree;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Degrees>
 */
class DegreeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'academic_degree' =>$this ->faker->randomElement(['1','2','3','4','5','6']),
        ];
    }
}

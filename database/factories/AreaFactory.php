<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Area;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Areas>
 */
class AreaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'academic_area'=>$this->faker->name(),
        ];
    }
}

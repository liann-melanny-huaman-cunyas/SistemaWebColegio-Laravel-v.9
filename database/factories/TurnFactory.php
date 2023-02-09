<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Turn;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Turns>
 */
class TurnFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'academic_turn' => $this -> faker -> randomElement(['mañana','tarde']),
        ];
    }
}

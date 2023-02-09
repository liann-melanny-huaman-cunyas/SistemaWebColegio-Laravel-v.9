<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Condition;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Conditions>
 */
class ConditionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'academic_condition' => $this -> faker -> randomElement(['aprobado','desaprobado','recuperacion']),
        ];
    }
}

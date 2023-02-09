<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Period;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Periods>
 */
class PeriodFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name_period'=> $this -> faker ->name(),
            'start_date'=> $this -> faker -> date(),
            'end_date'=> $this -> faker -> date(),
        ];
    }
}

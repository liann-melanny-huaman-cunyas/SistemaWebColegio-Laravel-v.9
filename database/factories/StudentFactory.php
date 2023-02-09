<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Students>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'student_name' =>$this ->faker->name(),
            'student_surnames' =>$this ->faker->name(),
            'student_DNI'=>$this ->faker->numberbetween(100000000,999999999),
            'student_cell'=>$this ->faker->numberbetween(900000000,1000000000),
            'student_address'=>$this->faker->safeEmail(),
            'date_of_birth'=>$this ->faker->date(),
            'student_age'=>$this->faker->numberBetween(18,90),
            'gender'=>$this ->faker->randomElement([Student::femenino,Student::masculino]),

        ];
    }
}

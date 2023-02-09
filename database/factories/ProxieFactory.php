<?php

namespace Database\Factories;

use App\Models\Proxie;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Proxies>
 */
class ProxieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'proxy_name' =>$this->faker->name(),
            'proxy_surnames' =>$this->faker->name(),
            'proxy_DNI'=>$this->faker->randomNumber(8, true),
            'proxy_cell' =>$this->faker->randomNumber(7, true),
            'proxy_address' => $this->faker->safeEmail(),
            'proxy_age'=>$this->faker->numberBetween(18,90),
            'gender'=>$this ->faker->randomElement([Proxie::femenino,Proxie::masculino]),
            'proxy_relation'=>$this->faker->name(),
        ];
    }
}

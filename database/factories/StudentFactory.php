<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name"=>$this->faker->colorName,
            "age"=>random_int(1,20),
            "tel"=>$this->faker->phoneNumber,
            "address"=>$this->faker->address
        ];
    }
}

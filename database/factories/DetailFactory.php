<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail(),
            'phone' => $this->faker->numerify('###-###-####'),
            'gender' => $this->faker->randomElement(['male', 'female']),//the gender does not match the name as it is.
            'age' => $this->faker->numerify('##'),
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PersonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $userName = $this->faker->userName();
        return [
            'name' => $this->faker->Name(),
            'email' => $this->faker->email(),
            'github' => $userName,
            'linkedin' => $userName,
        ];
    }
}

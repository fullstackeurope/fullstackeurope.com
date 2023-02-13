<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SponsorFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->company(),
            'level' => $this->faker->randomElement(['platinum', 'gold', 'silver', 'bronze']),
            'website' => $this->faker->url(),
        ];
    }
}

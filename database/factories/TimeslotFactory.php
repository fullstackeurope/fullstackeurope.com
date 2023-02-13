<?php

namespace Database\Factories;

use App\Models\Edition;
use Illuminate\Database\Eloquent\Factories\Factory;

class TimeslotFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'edition_id' => function () {
                return Edition::factory()->create()->id;
            },
            'starts_at' => $this->faker->dateTimeBetween('now', '+5 months'),
            'ends_at' => $this->faker->dateTimeBetween('+5 months', '+6 months'),
            'name' => $this->faker->sentence(3),
            'description' => $this->faker->text(),
        ];
    }
}

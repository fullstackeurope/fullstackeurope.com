<?php

namespace Database\Factories;

use App\Models\Speaker;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class WorkshopFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'speaker_id' => function () {
                return Speaker::factory()->create()->id;
            },
            'title' => $this->faker->sentence(),
            'slug' => Str::slug($this->faker->sentence()),
            'subtitle' => $this->faker->sentence(),
            'snippet' => $this->faker->paragraph(),
            'duration' => 280,
            'schedule' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
            'sold_out' => $this->faker->boolean(),
        ];
    }
}

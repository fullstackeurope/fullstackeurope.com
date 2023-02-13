<?php

namespace Database\Factories;

use App\Models\Speaker;
use Illuminate\Database\Eloquent\Factories\Factory;

class TalkFactory extends Factory
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
            'title' => $this->faker->sentence(3),
            'abstract' => $this->faker->text(),
        ];
    }
}

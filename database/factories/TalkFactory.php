<?php

namespace Database\Factories;

use App\Models\Speaker;
use App\Models\Talk;
use Illuminate\Database\Eloquent\Factories\Factory;

class TalkFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Talk::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'speaker_id' => function () {
                return Speaker::factory()->create()->id;
            },
            'title' => $this->faker->sentence(3),
            'abstract' => $this->faker->text,
        ];
    }
}

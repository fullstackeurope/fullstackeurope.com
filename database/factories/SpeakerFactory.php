<?php

namespace Database\Factories;

use App\Models\Edition;
use App\Models\Speaker;
use Illuminate\Database\Eloquent\Factories\Factory;

class SpeakerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Speaker::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        static $sortOrder = 0;

        return [
            'edition_id' => function () {
                return Edition::factory()->create()->id;
            },
            'sort_order' => ++$sortOrder,
            'slug' => $this->faker->unique()->slug,
            'name' => $this->faker->name,
            'title' => $this->faker->jobTitle,
            'bio' => $this->faker->text,
            'twitter' => $this->faker->userName,
            'website' => $this->faker->url,
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Edition;
use App\Models\Speaker;

/* @var \Illuminate\Database\Eloquent\Factory $factory */

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
            'talk' => $this->faker->sentence(3),
            'abstract' => $this->faker->text,
            'workshop' => $this->faker->sentence(3),
            'workshop_description' => $this->faker->text,
            'workshop_sold_out' => $this->faker->boolean,
            'bio' => $this->faker->text,
            'twitter' => $this->faker->userName,
            'website' => $this->faker->url,
        ];
    }
}

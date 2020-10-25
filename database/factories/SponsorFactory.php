<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Sponsor;

/* @var \Illuminate\Database\Eloquent\Factory $factory */

class SponsorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Sponsor::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->company,
            'level' => $this->faker->randomElement(['platinum', 'gold', 'silver', 'bronze']),
            'website' => $this->faker->url,
        ];
    }
}

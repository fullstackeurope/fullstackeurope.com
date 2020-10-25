<?php

namespace Database\Factories;

use App\Models\Edition;
use App\Models\Timeslot;
use Illuminate\Database\Eloquent\Factories\Factory;

class TimeslotFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Timeslot::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'edition_id' => function () {
                return Edition::factory()->create()->id;
            },
            'starts_at' => $this->faker->dateTimeBetween('now', '+5 months'),
            'ends_at' => $this->faker->dateTimeBetween('+5 months', '+6 months'),
            'name' => $this->faker->sentence(3),
            'description' => $this->faker->text,
        ];
    }
}

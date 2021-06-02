<?php

namespace Database\Factories;

use App\Models\Speaker;
use App\Models\Workshop;
use Illuminate\Database\Eloquent\Factories\Factory;

class WorkshopFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Workshop::class;

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
            'title' => $this->faker->paragraph(),
            'subtitle' => $this->faker->paragraph(),
            'snippet' => $this->faker->paragraph(),
            'duration' => 280,
            'schedule' => $this->faker->paragraph(),
            'description' => $this->faker->paragraph(),
            'sold_out' => $this->faker->boolean(),
        ];
    }
}

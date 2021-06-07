<?php

namespace Database\Factories;

use App\Models\Speaker;
use App\Models\Workshop;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
            'title' => $this->faker->sentence(),
            'slug' => Str::slug($this->faker->sentence()),
            'subtitle' => $this->faker->sentence(),
            'snippet' => $this->faker->paragraph(),
            'duration' => 280,
            'schedule' => $this->faker->paragraph(),
            'description' => $this->faker->paragraph(),
            'sold_out' => $this->faker->boolean(),
        ];
    }
}

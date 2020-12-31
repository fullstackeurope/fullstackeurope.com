<?php

namespace Database\Factories;

use App\Models\Edition;
use Carbon\CarbonImmutable;
use Illuminate\Database\Eloquent\Factories\Factory;

class EditionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Edition::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'year' => 2021,
            'hashtag' => 'fseu21',
            'starts_at' => $startsAt = CarbonImmutable::instance($this->faker->dateTimeBetween('now', '+5 months')),
            'ends_at' => $startsAt->addDays(2),
            'publish_schedule' => true,
            'tickets_url' => $this->faker->url,
            'venue' => $this->faker->company,
            'sale_ends_description' => 'Tickets still available for',
            'sale_ends_at' => $this->faker->dateTimeBetween('now', '+3 months'),
            'page_title' => $this->faker->sentence(4),
            'meta_description' => $this->faker->text(160),
        ];
    }
}

<?php

use App\Models\Edition;
use Carbon\CarbonImmutable;
use Faker\Generator as Faker;

/* @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Edition::class, function (Faker $faker): array {
    return [
        'year' => 2020,
        'hashtag' => 'fseu20',
        'starts_at' => $startsAt = CarbonImmutable::instance($faker->dateTimeBetween('now', '+5 months')),
        'ends_at' => $startsAt->addDays(2),
        'publish_schedule' => true,
        'tickets_url' => $faker->url,
        'venue' => $faker->company,
        'sale_ends_description' => 'Tickets still available for',
        'sale_ends_at' => $faker->dateTimeBetween('now', '+3 months'),
        'page_title' => $faker->sentence(4),
        'meta_description' => $faker->text(160),
    ];
});

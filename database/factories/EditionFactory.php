<?php

use App\Models\Edition;
use Faker\Generator as Faker;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Edition::class, function (Faker $faker): array {
    return [
        'year' => 2020,
        'sale_ends_description' => $faker->sentence(4),
        'sale_ends_at' => $faker->dateTimeBetween('now', '+3 months'),
        'page_title' => $faker->sentence(4),
        'meta_description' => $faker->text(160),
    ];
});

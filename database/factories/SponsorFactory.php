<?php

use App\Models\Sponsor;
use Faker\Generator as Faker;

/* @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Sponsor::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'level' => $faker->randomElement(['platinum', 'gold', 'silver', 'bronze']),
        'website' => $faker->url,
    ];
});

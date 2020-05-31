<?php

use App\Models\Edition;
use App\Models\Timeslot;
use Faker\Generator as Faker;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Timeslot::class, function (Faker $faker) {
    return [
        'edition_id' => function () {
            return factory(Edition::class)->create()->id;
        },
        'starts_at' => $faker->dateTimeBetween('now', '+5 months'),
        'ends_at' => $faker->dateTimeBetween('+5 months', '+6 months'),
        'name' => $faker->sentence(3),
        'description' => $faker->text,
    ];
});

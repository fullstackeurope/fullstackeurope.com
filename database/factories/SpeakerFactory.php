<?php

use App\Models\Edition;
use App\Models\Speaker;
use Faker\Generator as Faker;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Speaker::class, function (Faker $faker) {
    return [
        'edition_id' => function () {
            return factory(Edition::class)->create()->id;
        },
        'slug' => $faker->unique()->slug,
        'name' => $faker->name,
        'title' => $faker->jobTitle,
        'talk' => $faker->sentence(3),
        'abstract' => $faker->text,
        'workshop' => $faker->sentence(3),
        'workshop_description' => $faker->text,
        'workshop_sold_out' => $faker->boolean,
        'bio' => $faker->text,
        'twitter' => $faker->userName,
        'website' => $faker->url,
    ];
});

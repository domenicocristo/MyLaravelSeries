<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Serie;
use Faker\Generator as Faker;

$factory->define(Serie::class, function (Faker $faker) {
    return [
        'title' => $faker->unique()->words(3, true),
        'author' => $faker->name(),
        'release_date' => $faker->date(),
        'rating' => $faker->numberBetween(0, 5)
    ];
});

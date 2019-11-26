<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Famoso;
use Faker\Generator as Faker;

$factory->define(Famoso::class, function (Faker $faker) {
    return [
        'nombre' => $faker->name,
        'artistico' => $faker->name,
        'nacionalidad' => $faker->country,
    ];
});

<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Albums;
use Faker\Generator as Faker;

$factory->define(Albums::class, function (Faker $faker) {
    return [
        'name' => $faker -> name(),
        'gold_records'=> $faker ->numberBetween(0, 10),
        'platinum_records'=> $faker ->numberBetween(0, 10),
        'number_of_songs'=> $faker ->numberBetween(5, 20),
        'year_of_release' => $faker ->year()
    ];
});

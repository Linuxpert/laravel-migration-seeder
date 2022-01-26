<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Songs;
use Faker\Generator as Faker;

$factory->define(Songs::class, function (Faker $faker) {
    return [
        'name' => $faker -> name(),
        'album' => $faker -> name(),
        'number_of_plays' => 0,
        'musical_genre' => $faker -> word()
    ];
});

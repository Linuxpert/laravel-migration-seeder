<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Artists;
use Faker\Generator as Faker;

$factory->define(Artists::class, function (Faker $faker) {
    return [

        'name' => $faker -> name(),
        'surname' => $faker -> name(),
        'stage_name' => $faker -> name(),
        'date_of_birth' => $faker -> date(),
        'age' => $faker -> numberBetween(17, 80)
    ];
});

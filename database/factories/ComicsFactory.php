<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comics;
use Faker\Generator as Faker;

$factory->define(Comics::class, function (Faker $faker) {
    return [
        'title'=>$faker->sentence(),
        'author'=>$faker->name(),
        'release_date'=>$faker->date(),
        'pages'=>$faker->numberBetween(20, 300),
    ];
});

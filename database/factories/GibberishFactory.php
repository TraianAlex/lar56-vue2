<?php

use Faker\Generator as Faker;

$factory->define(App\Gibberish::class, function (Faker $faker) {
    return [
        'author'=>$faker->name(),
        'cite'=>$faker->sentence(),
        'date'=>$faker->date('Y-m-d')
    ];
});

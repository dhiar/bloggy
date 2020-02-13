<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Analytic;
use Faker\Generator as Faker;

$factory->define(Analytic::class, function (Faker $faker) {
    return [
        'campaign_id' => $faker->unique()->randomNumber(),
        'lead' => $faker->numberBetween(1, 10),
        'view' => $faker->randomNumber(),
        'share' => $faker->randomDigit,
        'email' => $faker->email
    ];
});

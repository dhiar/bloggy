<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;
use App\AnalyticReport;

$factory->define(AnalyticReport::class, function (Faker $faker) {
    return [
        'campaign_id' => $faker->unique()->randomNumber(),
        'lead' => $faker->numberBetween(1, 1),
        'view' => $faker->numberBetween(1, 1),
        'share' => $faker->numberBetween(1, 1),
        'created_at' => $faker->dateTimeBetween($startDate = '-5 years', $endDate = 'now')
    ];
});

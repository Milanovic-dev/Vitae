<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ResumeTemplate;
use Faker\Generator as Faker;

$factory->define(ResumeTemplate::class, function (Faker $faker) {
    return [
        'title' => $faker->title,
        'usedCount' => $faker->biasedNumberBetween($min = 10, $max = 10000, $function = 'sqrt')
    ];
});

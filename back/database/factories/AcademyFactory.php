<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\academy;
use Faker\Generator as Faker;

$factory->define(academy::class, function (Faker $faker) {
    return [
        "title"=> $faker->title(),
        "description"=> $faker->text(),
        "video"=>$faker->text(),
        "poster"=>$faker->text()
    ];
});

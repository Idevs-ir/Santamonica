<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Setting;
use Faker\Generator as Faker;

$factory->define(Setting::class, function (Faker $faker) {
    return [
        'title'=> $faker->name(),
        'address'=>$faker->text(),
        'email'=>$faker->email(),
        'workat'=> $faker->dateTime(),
        'logo'=>'web/images/logo.png'
    ];
});

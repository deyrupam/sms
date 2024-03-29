<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Teacher;
use Faker\Generator as Faker;

$factory->define(Teacher::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'designation' => $faker->jobTitle,
        'description' =>$faker->text,
        'google' =>$faker->email,


    ];
});

<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\IClass;
use Faker\Generator as Faker;

$factory->define(IClass::class, function (Faker $faker) {
    return [
            'teacher_id' =>$faker->numberBetween(1000,9000),
            'cls_name' =>$faker->randomElement($array = array ('One','Two','Three')),
            'numeric_value' =>$faker->numberBetween(100,900),
            'note' =>$faker->text,

    ];
});

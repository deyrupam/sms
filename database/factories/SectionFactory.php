<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Section;
use Faker\Generator as Faker;

$factory->define(Section::class, function (Faker $faker) {
    return [
            'sec_name' =>$faker->randomElement($array = array ('A','B','C')),
            'capacity' =>$faker->randomElement($array = array ('20','50','50')),
            'class_id' =>function(){
                return App\IClass::all()->random();
            },
            'teacher_id' =>$faker->numberBetween(1000,9000),
            'note' =>$faker->text,
    ];
});

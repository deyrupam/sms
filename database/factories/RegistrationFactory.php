<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Registration;
use Faker\Generator as Faker;
use App\User;

$factory->define(Registration::class, function (Faker $faker) {
    return [
            'regi_no' =>$faker->numberBetween(1000,9000),
            'student_id' =>$faker->randomDigit,
            'class_id' =>$faker->randomElement($array = array ('1','2','3')),

            'section_id' =>$faker->randomElement($array = array ('11','12','13')),
            'academic_year_id' =>2019,
            'roll_no' =>$faker->numberBetween(1,50),
            'group'=>$faker->randomElement($array = array ('A+','B+','O+')),
            'shift' =>$faker->randomElement($array = array ('Moring','Day')),
            'card_no' =>$faker->numberBetween(8000, 9000) ,
            'board_regi_no' =>$faker->numberBetween(10000,90000) ,
            'fourth_subject' =>$faker->randomElement($array = array ('101','103','102')),


    ];
});

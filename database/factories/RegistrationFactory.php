<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Registration;
use Faker\Generator as Faker;
use App\User;
use App\IClass;
use App\Section;
use App\Student;


$factory->define(Registration::class, function (Faker $faker) {
    return [
            'reg_no' =>$faker->numberBetween(190000,199999),
            'student_id' =>function(){
                return Student::all()->random();
            },
            'class_id' =>function(){
                return IClass::all()->random();
            },

            'section_id' =>function(){
                return Section::all()->random();
            },
            'academic_year_id' =>1,
            'roll_no' =>$faker->numberBetween(1,30),
            'group'=>$faker->randomElement($array = array ('AA','BB','B')),
            'shift' =>$faker->randomElement($array = array ('Moring','Day')),
            'card_no' =>$faker->numberBetween(8000, 9000) ,
            'board_regi_no' =>$faker->numberBetween(10000,90000) ,
            'fourth_subject' =>$faker->randomElement($array = array ('3','4')),


    ];
});

<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Student;
use Faker\Generator as Faker;
use Faker\Provider\en_HK\Phone;


$factory->define(student::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'dob' => $faker->date($format = 'Y-m-d',$max = 'now'),

            'religion' =>$faker->word,
            'blood_group' =>$faker->randomElement($array = array ('B+','O+','A+')),
            'nationality' =>$faker->randomElement($array = array ('Hinduism','OBuddhism','Christianity','Islam','Sikhism')),

            'photo' =>$faker->word,
            'email' =>$faker->email,
            'phone_no' =>$faker->e164PhoneNumber,
            'note' =>$faker->text,
            'father_name' =>$faker->name,
            'father_phone_no' =>$faker->e164PhoneNumber,
            'mother_name' =>$faker->name,
            'mother_phone_no' =>$faker->e164PhoneNumber,
            'guardian' =>$faker->name,
            'guardian_phone_no' =>$faker->e164PhoneNumber,
            'present_address' =>$faker->address,
            'permanent_address' =>$faker->address,
    ];
});

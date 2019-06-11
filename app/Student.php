<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'name', 'dob','gender','religion','	blood_group','nationality','photo','email',
        'phone_no','note','father_name','father_phone_no','mother_name','mother_phone_no',
        'guardian','guardian_phone_no','present_address','permanent_address'
    ];

}

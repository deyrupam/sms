<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendence extends Model
{
    protected $fillable = [
        'id', 'attend_date','status','student_id','cls_id','sec_id'
    ];
}

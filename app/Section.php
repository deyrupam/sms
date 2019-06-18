<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $fillable = [
        'sec_name', 'capacity','class_id','teacher_id','note'
    ];
}


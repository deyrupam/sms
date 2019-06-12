<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IClass extends Model
{
    protected $fillable = [
        'teacher_id', 'name','numeric_value','note'
    ];
}

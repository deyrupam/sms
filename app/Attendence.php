<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendence extends Model
{
    protected $fillable = [
        'id', 'attend_date','dataAttendence','cls_id','sec_id'
    ];
}

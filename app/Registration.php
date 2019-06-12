<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    protected $fillable = [
        'regi_no', 'student_id','class_id','section_id','academic_year_id','roll_no','group','shift ',
        'card_no','board_regi_no','fourth_subject','status'
    ];
}

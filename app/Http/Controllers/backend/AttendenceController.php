<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class AttendenceController extends Controller
{



   public function index(Request $request){


    $iclass = DB::table('i_classes')->get();
    $section = DB::table('sections')->get();
    // return view('backend.attend.index',
    // ['iclasses'=>$iclass,
    //  'sections'=>$section
    // ]);


    $student = DB::table('students')
       ->join('registrations', 'registrations.student_id', '=', 'students.id')
       ->where('class_id',$request->class_stu)
       ->where('section_id',$request->section_stu)
       ->select('students.name','students.id')
       ->get();
       return view('backend.attend.index',
       [
        'student' =>$student,
        'iclasses'=>$iclass,
        'sections'=>$section
       ]);

   }

//    public function getD(Request $request){


//        $student = DB::table('students')
//        ->join('registrations', 'registrations.student_id', '=', 'students.id')
//        ->where('class_id',$request->class_stu)
//        ->where('section_id',$request->section_stu)
//        ->select('students.name')
//        ->get();
//        return $student;

//    }
}

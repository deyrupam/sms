<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Attendence;
class AttendenceController extends Controller
{



    public function index(Request $request){


     $iclass = DB::table('i_classes')->get();
     $section = DB::table('sections')->get();
     $attend_date=$request->attend_date;

     $student = DB::table('students')
        ->join('registrations', 'registrations.student_id', '=', 'students.id')
        ->where('class_id',$request->class_stu)
        ->where('section_id',$request->section_stu)
        ->select('students.name','students.id','registrations.class_id','registrations.section_id','registrations.roll_no')
        ->get();




        return view('backend.attend.index',
        [
         'student' =>$student,
         'iclasses'=>$iclass,
         'sections'=>$section,
         'attend_date'=>$attend_date,

        ]);

    }

    public function add(Request $request){

        $attend_date=$request->attend_date;

        $checkDate = DB::table('attendences')
        ->where('attend_date',$attend_date)
        ->where('cls_id',$request->class_stu)
        ->where('sec_id',$request->section_stu)
        ->count();

        if( $checkDate >0){

            return redirect('attend/add')->with('success', 'Attendence already Taken');
        }


     $iclass = DB::table('i_classes')->get();
     $section = DB::table('sections')->get();

     $student = DB::table('students')
        ->join('registrations', 'registrations.student_id', '=', 'students.id')
        ->where('class_id',$request->class_stu)
        ->where('section_id',$request->section_stu)
        ->select('students.id','students.name','students.id','registrations.class_id','registrations.section_id','registrations.roll_no')
        ->get();


        return view('backend.attend.add',
        [
         'student' =>$student,
         'iclasses'=>$iclass,
         'sections'=>$section,
         'attend_date'=>$attend_date,
         'select_class'=>$request->class_stu,
         'select_section'=>$request->section_stu,

        ]);
    }
    public function store(Request $request){

        function Combine($array1, $array2){
            return(array_combine($array1, $array2));
        }

        $cls=$request->select_class_id;
        $sec=$request->select_section_id;

        $stu_Ids =$request->student_id;
        $attend_status =$request->attendence;
        $allAttendence=Combine($stu_Ids, $attend_status);

        $attendenceData=[
            'class'=>$cls,
            'section'=>$sec,
            'data'=>$allAttendence
        ];
        $jsonDataAttend = json_encode($attendenceData);


        $attendRecord = new Attendence([
            'attend_date' => $request->date_of_attendence,
            'dataAttendence' =>$jsonDataAttend ,
            'cls_id' => $cls,
            'sec_id' =>$sec,

            ]);
        $attendRecord->save();
        return redirect('attend/add')->with('success', 'Saved Records');





    }



 }

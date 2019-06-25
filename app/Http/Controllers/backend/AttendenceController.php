<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Attendence;
class AttendenceController extends Controller
{



    public function index(Request $request){


        // $attend_date=$request->attend_date;


        //  $iclass = DB::table('i_classes')->get();
        //  $section = DB::table('sections')->get();


        $attend_date="2019-06-07";
        $attendenRow = DB::table('attendences')
        ->where('attend_date',$attend_date)
        ->where('cls_id',1)
        ->where('sec_id',2)
        ->get();

        // $studentList=DB::table('students')
        // ->join('registrations', 'registrations.student_id', '=', 'students.id')
        // ->join('i_classes', 'registrations.class_id', '=', 'i_classes.id')
        // ->join('sections', 'registrations.section_id', '=', 'sections.id')
        // ->where('registrations.class_id',$request->class_stu)
        // ->where('registrations.section_id',$request->section_stu)
        // ->select('students.id','students.name','registrations.roll_no','i_classes.cls_name','sections.sec_name')
        // ->get();



        // //return $attendenRow;

        // return view('backend.attend.index',
        // [
        //  'student' =>$studentList ,
        //  'iclasses'=>$iclass,
        //  'sections'=>$section,
        //  'attend_date'=>$attend_date,
        //  'select_class'=>$request->class_stu,
        //  'select_section'=>$request->section_stu,

        // ]);


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
        ->join('i_classes', 'registrations.class_id', '=', 'i_classes.id')
        ->join('sections', 'registrations.section_id', '=', 'sections.id')
        ->where('registrations.class_id',$request->class_stu)
        ->where('registrations.section_id',$request->section_stu)
       ->select('students.id','students.name','students.id','registrations.roll_no','i_classes.cls_name','sections.sec_name')
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
        $i=0;

        $students=$request->student_id;
        foreach($students as $stu){


            $attendenceRecord = new Attendence([
                'attend_date' => $request->date_of_attendence,
                'status' => $request->status[$i],
                'student_id' => $request->student_id[$i],
                'cls_id' =>$request->select_class_id,
                'sec_id' =>$request->select_section_id,
            ]);
            $attendenceRecord->save();
            $i=$i+1;



        }
        return redirect('attend/add')->with('success', 'Saved Successfully');
      }



 }

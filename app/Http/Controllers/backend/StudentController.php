<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Student;
use App\Registration;
use App\IClass;
use App\Section;
use DB;
use App\AcademicYear;



class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

            $StudentData = DB::table('students')
            ->join('registrations', 'students.id', '=', 'registrations.student_id')

            ->select('students.*', 'registrations.reg_no','registrations.roll_no','registrations.card_no','registrations.status')
            ->get();

            return view('backend.student.index',[
            'StudentData' => $StudentData,
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if($request->hasFile('photo_stu')){
            $file =$request->file('photo_stu');
            $file->move("upload/",$file->getClientOriginalName());
            $fileName=$file->getClientOriginalName();
        }
        else{
        $fileName='default.png';
        }

        $student = new Student([
            'name' => $request->name_stu,
            'dob' => $request->dob_stu,
            'dob' => $request->gender_stu,
            'religion' =>$request->religion_stu,

            'blood_group' =>$request->bgroup_stu,
            'nationality' =>$request->nationlity_stu,
            'photo' =>$fileName,
            'email' =>$request->email_stu,
            'phone_no' =>$request->mobile_stu,
            'note' =>$request->note_stu,
            'father_name' =>$request->father_stu,
            'father_phone_no' =>$request->father_mobile,
            'mother_name' =>$request->mother_stu,
            'mother_phone_no' =>$request->mother_mobile,
            'guardian' =>$request->guardian_stu,
            'guardian_phone_no' =>$request->guardian_mobile,
            'present_address' =>$request->pre_address,
            'permanent_address' =>$request->per_address,
        ]);
        $student->save();



        $academic_year=AcademicYear::find(1);

        $regNo=mt_rand(190000,199999);
        $studentId=Student::latest()->first();

        $totalStudent = Registration::where('academic_year_id', 1)
                ->where('class_id', $request->class_stu)->count();
        $rollNo =$totalStudent + 1;

            $registration = new Registration([
           'reg_no' => $regNo,
            'student_id' => $studentId->id,
            'class_id' => $request->class_stu,
            'section_id' =>$request->section_stu,
            'academic_year_id' =>$academic_year->id,
            'roll_no' =>$request->roll_stu,
            'shift' =>$request->shift_stu,
            'card_no' =>$request->idCard_stu
            ]);
         $registration->save();

         return redirect('student/')->with('success', 'Add Student Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

                 $student = DB::table('students')->find($id);


                $electives = DB::table('subjects')->get()
                   ->where('type', 'Electives');

              $reg = Registration::where('student_id', $id)
              ->join('i_classes', 'registrations.class_id', '=', 'i_classes.id')
              ->join('academic_years', 'registrations.academic_year_id', '=', 'academic_years.id')
              ->join('sections', 'registrations.section_id', '=', 'sections.id')
              ->select('registrations.reg_no','registrations.roll_no',
              'registrations.card_no','registrations.status',
              'registrations.board_regi_no','registrations.academic_year_id',
                'i_classes.id','i_classes.cls_name','academic_years.ac_title','sections.sec_name')

              ->first();


              return view('backend.student.view',
              ['student' =>$student,
               'reg'=>$reg ,
               ]);










    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {


                $student = DB::table('students')->find($id);
                $iclass = DB::table('i_classes')->get();
                $section = DB::table('sections')->get();
                $electives = DB::table('subjects')->get()
                   ->where('type', 'Electives');

              $reg = Registration::where('student_id', $id)
              ->join('i_classes', 'registrations.class_id', '=', 'i_classes.id')
              ->join('sections', 'registrations.section_id', '=', 'sections.id')
              ->select('registrations.reg_no','registrations.roll_no','registrations.card_no',
              'registrations.status','registrations.board_regi_no',
                'i_classes.id','i_classes.cls_name','sections.sec_name')

              ->first();


              return view('backend.student.edit',
              ['student' =>$student,
               'reg'=>$reg ,
              'iclass' =>$iclass,
              'section'=>$section,
              'electives'=>$electives
              ]);






    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {


         if($request->hasFile('photo_stu')){
            $file =$request->file('photo_stu');
            $file->move("upload/",$file->getClientOriginalName());
            $fileName=$file->getClientOriginalName();
        }
        else{
            $fileName =$request->existing_img;

        }






            DB::table('students')
            ->where('id', $id)
            ->update([
            'name' => $request->name_stu,
            'dob' => $request->dob_stu,
            'gender' => $request->gender_stu,
            'religion' =>$request->religion_stu,
            'blood_group' =>$request->bgroup_stu,
            'nationality' =>$request->nationlity_stu,
            'email' =>$request->email_stu,
            'phone_no' =>$request->mobile_stu,
            'note' =>$request->note_stu,
            'father_name' =>$request->father_stu,
            'father_phone_no' =>$request->father_mobile,
            'mother_name' =>$request->mother_stu,
            'mother_phone_no' =>$request->mother_mobile,
            'guardian' =>$request->guardian_stu,
            'guardian_phone_no' =>$request->guardian_mobile,
            'present_address' =>$request->pre_address,
            'permanent_address' =>$request->per_address,
             ]);
             DB::table('registrations')
            ->where('student_id', $id)
            ->update([
             'roll_no' =>$request->roll_stu,
            'card_no' =>$request->idCard_stu]);





            return redirect('student/')->with('success', 'Student record updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function add()
    {
        $iclass = DB::table('i_classes')->get();
        $section = DB::table('sections')->get();
        $electives = DB::table('subjects')->get()
                   ->where('type', 'Electives');
        return view('backend.student.add',
          [
            'iclass' => $iclass,
            'section' =>$section,
            'electives'=>$electives
            ]);
    }
    public function stutAttendenceView($id)
    {

        function attendingPercentage($id){

            $totalStrength = DB::table('attendences')
            ->where('student_id','=',$id)
            ->count();
            $attendanceStrength= DB::table('attendences')
            ->where('student_id','=',$id)
            ->where('status','=','1')
            ->count();


            $atten=$attendanceStrength*100/$totalStrength;
            $attendingPercentage=(round($atten));
            return  [$attendingPercentage,
            $totalStrength];

        }




        $student = DB::table('students')->find($id);




              $reg = Registration::where('student_id', $id)
              ->join('i_classes', 'registrations.class_id', '=', 'i_classes.id')
              ->join('sections', 'registrations.section_id', '=', 'sections.id')
              ->select('registrations.reg_no','registrations.roll_no',
              'registrations.card_no',
              'registrations.board_regi_no',
              'i_classes.cls_name','sections.sec_name')->first();




         $attendData = DB::table('attendences')
        ->where('student_id',$id)
        ->select('attendences.attend_date','attendences.status','attendences.student_id')
        ->paginate(15);



          $attendingPercentage=attendingPercentage($id);




        return view('backend.student.viewattendence',[
            "dataAttendence"=>$attendData,
            'student' =>$student,
            'reg'=>$reg ,
             'attendingPercent'=>$attendingPercentage
        ]);


    }


}

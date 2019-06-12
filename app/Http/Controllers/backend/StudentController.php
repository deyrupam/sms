<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Student;
use App\Registration;
use App\IClass;
use App\Section;
use DB;



class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     return view('backend.student.index');
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



            return $request;


        // if($request->hasFile('photo_stu')){
        //     $file =$request->file('photo_stu');
        //     $file->move("upload/",$file->getClientOriginalName());
        //     $fileName=$file->getClientOriginalName();
        // }
        // else{
        // $fileName='default.png';
        // }


        // $student = new Student([
        //     'name' => $request->name_stu,
        //     'dob' => $request->dob_stu,
        //     'dob' => $request->gender_stu,
        //     'religion' =>$request->religion_stu,

        //     'blood_group' =>$request->bgroup_stu,
        //     'nationality' =>$request->nationlity_stu,
        //     'photo' =>$fileName,
        //     'email' =>$request->email_stu,
        //     'phone_no' =>$request->mobile_stu,
        //     'note' =>$request->note_stu,
        //     'father_name' =>$request->father_stu,
        //     'father_phone_no' =>$request->father_mobile,
        //     'mother_name' =>$request->mother_stu,
        //     'mother_phone_no' =>$request->mother_mobile,
        //     'guardian' =>$request->guardian_stu,
        //     'guardian_phone_no' =>$request->guardian_mobile,
        //     'present_address' =>$request->pre_address,
        //     'permanent_address' =>$request->per_address,
        // ]);
        // $student->save();
        //  $registration = new Registration([
        //     'regi_no' => $request->name_stu,
        //     'student_id' => $request->stu_id,
        //     'class_id' => $request->class_stu,
        //     'section_id' =>$request->section_stu,

        //     'academic_year_id' =>$request->bgroup_stu,
        //     'roll_no' =>$request->roll_stu,
        //     'group' =>$fileName,
        //     'shift' =>$request->shift_stu,
        //     'card_no' =>$request->idCard_stu,
        //     'board_regi_no' =>$request->note_stu,
        //     'fourth_subject' =>$request->elective_sub_stu,

        // ]);
        // $registration->save();

         //return redirect('student/')->with('success', 'Add Student Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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

        return view('backend.student.add', ['iclass' => $iclass,'section' =>$section]);
    }
}

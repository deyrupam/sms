<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Section;
use Redirect;
use DB;


class SectionController extends Controller
{
    public function index(){


        $section = DB::table('sections')->get();
                    // ->join('teachers', 'i_classes.teacher_id', '=', 'teachers.id')
                    // ->select('i_classes.*', 'teachers.name')
                    //->get();

            return view('backend.section.index',[
            'sections' => $section
            ]);
    }
    public function edit($id){
    $section = DB::table('sections')->find($id);

    return view('backend.section.edit',['section'=>$section]);
    }
    public function update(Request $request,$id){

        DB::table('sections')
        ->where('id', $id)
        ->update([
         'sec_name' =>$request->sec_name,
         'capacity'=>$request->capacity_section,
         'class_id'=>$request->cls_section,
         'teacher_id' =>$request->teacher_section,
          'status'=>$request->sec_status
        ]);
        return Redirect::back()->with('success', 'Record updated successfully!');;

    }
    public function store(Request $request){
        return $request;
        // $section = new Section([
        //     'sec_name' => $request->sec_name,
        //     'capacity' => $request->capacity_section,
        //     'class_id' => $request->sec_cls,
        //     'teacher_id' =>$request->sec_teacher,
        //     'status' =>$request->sec_status
        //      ]);
        // $section->save();
    }
    public function add()
    {
        $iclass = DB::table('i_classes')->get();
        $teachers = DB::table('teachers')->get();
        return view('backend.section.add',['classes'=>$iclass,'teachers'=>$teachers]);
    }
}

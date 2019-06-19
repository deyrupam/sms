<?php
namespace App\Http\Controllers\backend;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\IClass;
use Redirect;
use DB;

class IClassController extends Controller
{
    public function index(){


        $iclasses = DB::table('i_classes')->get();
                    // ->join('teachers', 'i_classes.teacher_id', '=', 'teachers.id')
                    // ->select('i_classes.*', 'teachers.name')
                    //->get();

            return view('backend.iclass.index',[
            'iclasses' => $iclasses
            ]);
    }
    public function show($id){

    }
    public function edit($id){

        $iclass = DB::table('i_classes')->find($id);

        return view('backend.iclass.edit',['iclass'=>$iclass]);
    }
    public function update(Request $request,$id){
        DB::table('i_classes')
        ->where('id', $id)
        ->update([
         'cls_name' =>$request->cls_name,
        'teacher_id' =>$request->cls_teacher,
        'numeric_value'=>$request->cls_code,
        'note'=>$request->cls_note,
        'status'=>$request->cls_status
        ]);
        return Redirect::back()->with('success', 'Record updated successfully!');;

    }
    public function add()
    {

        $teachers = DB::table('teachers')->get();
        return view('backend.iclass.add',['teachers'=>$teachers]);
    }
    public function store(Request $request){

        return $request ; die;
        $section = new IClass([
            'cls_name' => $request->cls_name,
            'numeric_value' => $request->cls_numeric_value,
            'teacher_id' => $request->cls_teacher,
            'note' =>$request->cls_note,
            'status' =>$request->cls__status
             ]);
        $section->save();
    }

    public function destroy($id){

    }
}

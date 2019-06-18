<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class AcademicController extends Controller
{
    public function edit($id){

        $academic = DB::table('academic_years')->find($id);


        return view('backend.academic.edit',[
            'academic' => $academic
            ]);
    }
}

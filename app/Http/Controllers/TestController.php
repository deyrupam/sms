<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){
        return view('test.index');
    }
    public function add(){
        return view('test.index');
    }
}

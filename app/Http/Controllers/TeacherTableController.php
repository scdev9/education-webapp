<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeacherTableController extends Controller
{
    //
 


    public function index(){
        $teachers=DB::select('select * from teachers');

        return view('teachers.index',compact('teachers'));
    }

    public function create(){
        return 'Teacher Create';
    }
}

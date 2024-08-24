<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        $stid=Auth::user()->id;
        $role=Auth::user()->role_id;
        $teachers=DB::select('select sessions.session_date,sessions.start_time,sessions.end_time,students.student_name,students.student_email from session_controls join sessions on session_controls.session_id=sessions.id join teachers on session_controls.teacher_id=teachers.user_id join students on session_controls.student_id=students.user_id where session_controls.teacher_id = ?',[$stid]);
        $sessions=DB::select('select sessions.session_name,sessions.session_date,sessions.start_time,sessions.end_time,teachers.teacher_name,teachers.teacher_email from session_controls join sessions on session_controls.session_id=sessions.id join teachers on session_controls.teacher_id=teachers.user_id join students on session_controls.student_id=students.user_id where students.user_id = ?',[$stid]);

        //dd($teachers);
      
   
       $students = DB::select('select * from students where user_id = ?',[$stid]);
       $teacherList=[];
       $teachersCount=DB::select('select count(teacher_name) as teacherscount from teachers');
       $studentsCount=DB::select('select count(*) as studentscount from students');
       $usersCount=DB::select('select count(*) as userscount from users');
       $stName=Auth::user()->name;
       $stEmail=Auth::user()->email;
       $studentCheck=DB::select('select * from students where student_name=? and student_email=?',[$stName,$stEmail]);
      // $studen = [];
      $teacherCheck=DB::select('select * from teachers where teacher_name=? and teacher_email=?',[$stName,$stEmail]);
      
     // dd($teacherCount);
      /* foreach($teachers as $teacher){
        
        
        $studen[]=$teacher->student_name;
       }*/
     foreach($teachers as $teacher){
        
        $session_name=$teacher->session_date.$teacher->start_time.$teacher->end_time;

        $teacherList[$session_name][]= $teacher->student_name;
        
     }

       //dd($teacherList,$teachers);

       //dd(empty($check));
        
        return view('home',compact('role','students','stid','teachers','sessions','teachers','teacherList','studentCheck','teacherCheck','teachersCount','studentsCount','usersCount'));
    }
}

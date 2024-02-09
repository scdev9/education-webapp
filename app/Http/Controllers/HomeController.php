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
        $sessions=DB::select('select sessions.session_name,sessions.session_date,sessions.start_time,sessions.end_time,teachers.teacher_name,teachers.teacher_email from session_controls join sessions on session_controls.session_id=sessions.id join teachers on session_controls.teacher_id=teachers.user_id join students on session_controls.student_id=students.user_id where students.user_id = ?',[$stid]);

        //dd($role);
      
   
       $students = DB::select('select * from students where user_id = ?',[$stid]);
       $teachers = DB::select('select * from teachers where user_id = ?',[$stid]);
       

       //dd($teachers);

       
        
        return view('home',compact('role','students','stid','teachers','sessions'));
    }
}

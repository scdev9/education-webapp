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
        $role=Auth::user()->role_id;
        $sessions=DB::select('select * from sessions');

        //dd($role);
        $stid=Auth::user()->id;
   
       $students = DB::select('select * from students where user_id = ?',[$stid]);
       $teachers = DB::select('select * from teachers where user_id = ?',[$stid]);

       //dd($teachers);

       
        
        return view('home',compact('role','students','stid','teachers','sessions'));
    }
}

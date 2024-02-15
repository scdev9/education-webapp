<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;

class UserTableController extends Controller
{
    //
    public function index(){
        return view('users.index');
    }


    public function create(){
        return view('users.create');
    }

    public function next(Request $request){

        $request->validate([
            'userName'=> 'required|max:255|string',
            'userEmail' => 'required',
            'password' => 'required',
            'radio' => 'required|array|min:1',
        ]);
        if($request->radio[0]=="Student"){
          $role=1;

          $lastInsertedId = User::insertGetId([
            'name' => $request->userName,
            'email' => $request->userEmail,
            'password' => bcrypt($request->password),
            'role_id'=>$role

        ]);
       
        
        Student::create([
            'student_name'=> $request->userName,
            'student_email'=> $request->userEmail,
            'user_id'=> $lastInsertedId,
            'teacher_id'=>$role,
            'student_grade'=>$role

        ]);
    }
     
        else{
            $role=2;

            $lastInsertedId = User::insertGetId([
              'name' => $request->userName,
              'email' => $request->userEmail,
              'password' => bcrypt($request->password),
              'role_id'=>$role
  
          ]);
         
         
         Teacher::create([
              'teacher_name'=> $request->userName,
              'teacher_email'=> $request->userEmail,
              'user_id'=> $lastInsertedId,
              'teacher_subject'=>'test'
  
          ]);
        }
    }


}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class StudentTableController extends Controller
{
    
   public function __construct()
   {
       $this->middleware('auth');
   }

    public function index(){
        $students=DB::select('select * from students');
         # Allow only if the user is admin or id matches
    $user = Auth::user()->role_id;
    if ($user==0 ){
        return view('students.index',compact('students'));
    }

    return response('Unauthorized.', 401);

        
        
    }


    public function create()  {
        $user = Auth::user()->role_id;
        if ($user==0 ){
            return view('students.create');
        }
    
        return response('Unauthorized.', 401);
    
            
            
        }
        
        
    
    public function store(Request $request)  {

        
        $user = Auth::user()->role_id;
        if ($user==0 ){
            
        

       $request->validate([
        'studentName'=> 'required|max:255|string',
        'studentEmail'=> 'required',
        'grade'=> 'required|max:13|integer',
        'userId' => 'required|integer',
        'teacherId' => 'required|integer'

       ]);



       Student::create([
        'student_name'=>$request->studentName,
          'student_grade' =>$request->grade,
          'student_email'=> $request->studentEmail,
          'user_id' =>$request->userId,
          'teacher_id' =>$request->teacherId
               ]);

       return redirect()->back('students/create')->with('status','Student Added');

    }
    
    return response('Unauthorized.', 401);

        
        
    }
    


}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class StudentTableController extends Controller
{
    
   public function __construct()
   {
       $this->middleware('auth');
   }

    public function index(){
        $students=DB::select('select students.id,students.created_at,students.updated_at,students.user_id,students.student_name,students.student_email,students.student_grade,students.teacher_id,teachers.teacher_name from students join teachers on students.teacher_id=teachers.id');
         # Allow only if the user is admin or id matches
    $user = Auth::user()->role_id;
    if ($user==0 ){
        return view('students.index',compact('students'));
    }

    return response('Unauthorized.', 401);

        
        
    }


    public function create()  {
        $user = Auth::user()->role_id;
        $teachers=DB::select('select * from teachers');
        $userName=Auth::user()->name;
        $userEmail=Auth::user()->email;
       // $student=Student::findOrFail($id);
       // $students=DB::select('select students.id,students.created_at,students.updated_at,students.user_id,students.student_name,students.student_email,students.student_grade,students.teacher_id,teachers.teacher_name,teachers.id from students join teachers on students.teacher_id=teachers.id where students.id= ?',[$id]);
     
        if ($user==1 ){
            return view('students.create',compact('teachers','user','userName','userEmail'));
        }
    
        return response('Unauthorized.', 401);
    
            
            
        }
        
        
    
    public function store(Request $request)  {

        
        $user = Auth::user()->role_id;
        $userId=Auth::user()->id;
        $teacherId=DB::select('select id from teachers where teacher_name=?',[$request->teacherName]);
        if ($user==1 ){
            
       // dd($teacherId);

       $request->validate([
        'studentName'=> 'required|max:255|string',
        'studentEmail'=> 'required',
        'studentGrade'=> 'required|string',
        'teacherName' => 'required|string'

       ]);



       Student::create([
        'student_name'=>$request->studentName,
          'student_grade' =>$request->studentGrade,
          'student_email'=> $request->studentEmail,
          'user_id' =>$userId,
          'teacher_id' =>$teacherId[0]->id
               ]);

       return redirect()->back()->with('status','Student Profile Created.');
            }
       return response('Unauthorized.', 401);
    }
    
    

        
        
    
    
    public function edit(int $id){
        $teachers=DB::select('select * from teachers');
        $student=Student::findOrFail($id);
        $students=DB::select('select students.id,students.created_at,students.updated_at,students.user_id,students.student_name,students.student_email,students.student_grade,students.teacher_id,teachers.teacher_name,teachers.id from students join teachers on students.teacher_id=teachers.id where students.id= ?',[$id]);
        $user = Auth::user()->role_id;
        if ($user==0 ){
       // return ($teach);
       //dd($students);
       return view('students.edit',compact('student','teachers','students'));
        }

     
        return response('Unauthorized.', 401);
    }

    public function update(Request $request,int $id){
        $user = Auth::user()->role_id;
     if ($user==0 ){
        //dd($request->teacherName);
       $teacherId=DB::select('select id from teachers where teacher_name=?',[$request->teacherName]);
       //dd($teacherId);
      // dd($teacherId);
        $request->validate([
            'studentName'=> 'required|max:255|string',
            'studentEmail' => 'required',
            'grade' => 'required|max:255|string',
            'teacherName'=>'required'
            
        ]);

        Student::findOrFail($id)->update([
            'student_name'=> $request->studentName,
            'student_email'=> $request->studentEmail,
            'student_grade'=>$request->grade,
            'teacher_id'=>$teacherId[0]->id,

        ]);
      // dd($request);
        return redirect()->back()->with('status','Update Done.');
      }
      return response('Unauthorized.', 401);
    }

    public function destroy(int $id){

        $teacher=Student::findOrFail($id);
        $user = Auth::user()->role_id;
        if ($user==0 ){
        $teacher->delete();
       

        return redirect()->back()->with('status','Record Deleted.');
        }
        return response('Unauthorized.', 401);
    }


}

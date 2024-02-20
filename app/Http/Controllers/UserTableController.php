<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UserTableController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function index(){
        $users=DB::select('select * from users');
        $user = Auth::user()->role_id;
        if ($user==0 ){
        return view('users.index',compact('users'));
        }
        return response('Unauthorized.', 401);
    }


    public function create(){
        $user = Auth::user()->role_id;
        if ($user==0 ){
        return view('users.create');
        }
        return response('Unauthorized.', 401);
    }

    public function store(Request $request){

        $request->validate([
            'userName'=> 'required|max:255|string',
            'userEmail' => 'required',
            'password' => 'required',
            'radio' => 'required|array|min:1',
        ]);
        if($request->radio[0]=="Student"){
          $role=1;

          User::create([
            'name' => $request->userName,
            'email' => $request->userEmail,
            'password' => bcrypt($request->password),
            'role_id'=>$role
        ]);

      return redirect()->back()->with('status','User Created');
       
        
        
    }
     
        else{
            $role=2;

            User::create([
                'name' => $request->userName,
                'email' => $request->userEmail,
                'password' => bcrypt($request->password),
                'role_id'=>$role
            ]);
         
            return redirect()->back()->with('status','User Created');
        }
    }


}

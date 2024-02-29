@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
   
        <div class="col-md-10">

            <div class="card">
                <div class="card-header"> @if($role==1 && empty($check)==false)
                    {{ __("You're logged in as Student") }}

                    @elseif($role==1 && empty($studentCheck)==true)
                    <div>
                        <a href="{{url('/students/create')}}" class="btn btn-primary">Create Student Profile</a>
                    </div>

                </div>
                <div>
                    <h3>Create Student Profile to use Features as Student.</h3>
                </div>
                @elseif($role==0)
                {{ __("You're logged in as Admin") }}

                @elseif($role==2 && empty($teacherCheck)==false)
                {{ __("You're logged in as Teacher") }}

                @elseif($role==2 && empty($teacherCheck)==true)
                <div>
                    <a href="{{url('/teachers/create')}}" class="btn btn-primary">Create Teacher Profile</a>
                </div>


                @endif

            </div>

            <div class="card-body">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif




                <div align='center'>
                    <b><u>@if($role==1 && empty($studentCheck)==false)
                            {{ __("Your Online Classes Shedule.") }}
                        </u>
                    </b>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Session Name</th>
                                <th>Session Date</th>
                                <th>Start Time</th>
                                <th>End Time</th>
                                <th>Teacher's Name</th>
                                <th>Teachers's Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($sessions as $session)
                            <tr>
                                <td>{{$session->session_name}}</td>
                                <td>{{$session->session_date}}</td>
                                <td>{{$session->start_time}}</td>
                                <td>{{$session->end_time}}</td>
                                <td>{{$session->teacher_name}}</td>
                                <td>{{$session->teacher_email}}</td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>


                @elseif($role==2 && empty($teacherCheck)==false)




                {{ __("Your Online Teaching Shedule.") }}
                <div>
                    @foreach($teacherList as $k=>$teacher)
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    {{$k}}
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Student Name</th>


                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($teacher as $student)
                                            <tr>
                                                <td>{{$student}}</td>



                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>

                    @endforeach






                </div>
                @elseif($role==0)

                <div class="row">
                <div class="col-md-3">
            <ul class="list-group">
                <a href="{{url('/')}}"><li class="list-group-item active" aria-current="true">Analytics</li></a>
                <a href="{{url('/teachers')}}"><li class="list-group-item">Teachers</li></a>
                <a href="{{url('/students')}}"><li class="list-group-item">Students</li></a>
                <a href="{{url('/users')}}"><li class="list-group-item">Users</li></a>
                <a href="{{url('#')}}"><li class="list-group-item">And a fifth one</li></a>
            </ul>
        </div>
                    <div class="col-sm-4">
                        <div class="card card-body bg-primary text-white">
                           <label>Teachers</label>
                           <h1>{{$teachersCount[0]->teacherscount}}</h1>
                        </div>
                    </div>
                    <div class="col-sm-4">
                
                        <div class="card card-body bg-success text-white">
                           <label>Students</label>
                           <h1>{{$studentsCount[0]->studentscount}}</h1>
                        </div>
                
                    </div>
                </div>
                <div class="col-sm-4">
                <div class="card card-body bg-danger text-white">
                           <lable>Users</lable>
                           <h1>{{$usersCount[0]->userscount}}</h1>
                        </div>
                </div>
            </div>
            @endif

        </div>
        
    </div>
</div>
@endsection
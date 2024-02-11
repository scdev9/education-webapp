@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> @if($role==1)
                    {{ __("You're logged in as Student") }}

                    @elseif($role==0)
                    {{ __("You're logged in as Admin") }}
                   
                    @else
                    {{ __("You're logged in as Teacher") }}
                    @endif
                   
                </div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif




                    <div align='center'>
                        <b><u>@if($role==1)
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
                   
                   
                    @elseif($role==2)
                   
                  

                 
                    {{ __("Your Online Teaching Shedule.") }}
                    <div>
                        @foreach($teacherList  as $k=>$teacher)
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
                       

                      
                       @endif
                      
                       
                    </div>

                </div>
            </div>
        </div>
        @endsection
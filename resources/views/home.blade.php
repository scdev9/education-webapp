@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> @if($role==1)
                    {{ __("You're logged in as Student") }}
                    @endif
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    

                    
                    <div align='center' >
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
                    @else
                    {{ __("You're logged in as Teacher") }}
                    <div>
                    <table class="table">
                        <thead>
                           <tr> 
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Subject</th>
                           </tr> 
                        </thead>
                          <tbody>
                           @foreach($teachers as $teacher)
                             <tr>
                                <td>{{$teacher->id}}</td>
                                <td>{{$teacher->teacher_name}}</td>
                                <td>{{$teacher->teacher_email}}</td>
                                <td>{{$teacher->teacher_subject}}</td>
                             </tr>
                        @endforeach
                          </tbody>
                    </table>
            </div>
                    @endif


                </div>

        </div>
    </div>
</div>
@endsection

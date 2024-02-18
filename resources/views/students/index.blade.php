@extends('layouts.app')

@section('content')
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Students</title>
</head>
<body>
<div class="container">  
    @if (session('status'))  
        <div class="alert alert-success">{{session('status')}}</div>
    @endif    
<div class="card col-md-12">
  <div class="card-header">
  <a class="btn btn-primary" href="{{url('/dashboard')}}">Back</a>

  </div>
  <div class="card-body">
    <h5 class="card-title">Students</h5>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Created At</th>
      <th scope="col">Updated At</th>
      <th scope="col">User Id</th>
      <th scope="col">Teacher Id</th>
      <th scope="col">Name</th>
      <th scope="col">Grade</th>
      <th scope="col">Email</th>

    </tr>
  </thead>
  <tbody>
    @foreach($students as $student)
    <tr>
      <th scope="row">{{$student->id}}</th>
      <td>{{$student->created_at}}</td>
      <td>{{$student->updated_at}}</td>
      <td>{{$student->user_id}}</td>
      <td>{{$student->teacher_name}}</td>
      <td>{{$student->student_name}}</td>
      <td>{{$student->student_grade}}</td>
      <td>{{$student->student_email}}</td>
      <td>
        <a class="btn btn-success" href="{{url('students/'.$student->id.'/edit')}}">Edit</a>
        <a class="btn btn-danger" href="{{url('students/'.$student->id.'/delete')}}">Delete</a>
        
      </td>
    </tr>
    @endforeach
   
  </tbody>
</table>
    <p class="card-text"></p>
    
  </div>
</div>
</div>
</body>
@endsection
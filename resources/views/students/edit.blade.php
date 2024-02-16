@extends('layouts.app')

@section('content')
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Student Edit</title>
</head>
<body >
   
<div class="container">    
<a class="btn btn-primary" href="{{url('/students')}}">Back</a>
@if(session('status'))
<div class="alert alert-success">{{session('status')}}</div>
@endif
<form action="{{url('students/'.$student->id.'/edit')}}" method="post">
@csrf
@method('PUT')
<div class="form-group p-2">
    <label for="exampleInputName">Student Name</label>
    <input type="String" class="form-control" name="studentName" value="{{$student->student_name}}">
   @error('studentName') <span class="text-danger">{{$message}}</span> @enderror
  </div>
  <div class="form-group p-2">
    <label for="exampleInputEmail">Email</label>
    <input type="email" class="form-control" name="studentEmail" value="{{$student->student_email}}">
    @error('studentEmail') <span class="text-danger">{{$message}}</span> @enderror
  </div>

  <div class="form-group p-2">
    <label for="exampleInputGrade">Grade</label>
    <input type="string" class="form-control" name="grade" value="{{$student->student_grade}}">
    @error('grade') <span class="text-danger">{{$message}}</span> @enderror
  </div>

  <div class="form-group p-2">
    <label for="exampleInputGrade">Teacher Id</label>
    <input type="integer" class="form-control" name="teacherId" value="{{$student->teacher_id}}">
    @error('teacherId') <span class="text-danger">{{$message}}</span> @enderror
  </div>

  
  <button type="submit" class="btn btn-success p-2">Update</button>
</form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
@endsection
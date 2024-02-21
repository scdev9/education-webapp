@extends('layouts.app')

@section('content')
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Students</title>
</head>
<body >
   
<div class="container"> 
<div>
  <a href="{{url('/')}}" class="btn btn-primary">Back</a>
</div>
   

@if (session('status'))
  <div class="alert alert-success">{{session('status')}}
  
  </div>
  @endif

<form action="{{url('students/create')}}" method="post">
@csrf
<div class="form-group p-2">
    <label for="exampleInputName">Student Name</label>
    <input type="String" class="form-control" name="studentName" placeholder="Enter Your Name" value="{{$userName}}">
   @error('userName') <span class="text-danger">{{$message}}</span> @enderror
  </div>
  <div class="form-group p-2">
    <label for="exampleInputEmail">Student Email</label>
    <input type="email" class="form-control" name="studentEmail" placeholder="Enter email" value="{{$userEmail}}">
    @error('userEmail') <span class="text-danger">{{$message}}</span> @enderror
  </div>

  <div class="form-group p-2">
    <label for="exampleInputGrade">Grade</label>
    <input type="string" class="form-control" name="studentGrade" placeholder="Grade">
    @error('password') <span class="text-danger">{{$message}}</span> @enderror
  </div>
  
  <div class="form-group p-2">
  <label for="exampleInputEmail">Teacher</label>
  <select class="form-select"  name="teacherName">
  @foreach($teachers as $teacher)
    <option value="{{$teacher->teacher_name}}"  class="dropdown-item">{{$teacher->teacher_name}}</option>
   @endforeach
</select>
  </div>

  

  <button type="submit" class="btn btn-primary p-2">Create</button>
</form>
</div>

</form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
@endsection
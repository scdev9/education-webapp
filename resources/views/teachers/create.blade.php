@extends('layouts.app')

@section('content')
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Teachers</title>
</head>
<body >
   
<div class="container"> 
<div>
  <a href="{{url('/dashboard')}}" class="btn btn-primary">Back</a>
</div>
   

@if (session('status'))
  <div class="alert alert-success">{{session('status')}}
  
  </div>
  @endif

<form action="{{url('teachers/create')}}" method="post">
@csrf
<div class="form-group p-2">
    <label for="exampleInputName">Teacher Name</label>
    <input type="String" class="form-control" name="teacherName" placeholder="Enter Your Name" value="{{$userName}}">
   @error('userName') <span class="text-danger">{{$message}}</span> @enderror
  </div>
  <div class="form-group p-2">
    <label for="exampleInputEmail">Teacher Email</label>
    <input type="email" class="form-control" name="teacherEmail" placeholder="Enter email" value="{{$userEmail}}">
    @error('userEmail') <span class="text-danger">{{$message}}</span> @enderror
  </div>

  <div class="form-group p-2">
  <label for="exampleInputEmail">Subject</label>
  <select class="form-select"  name="subject">
  @foreach($subjects as $subject)
    <option value="{{$subject->subject}}"  class="dropdown-item">{{$subject->subject}}</option>
   @endforeach
</select>

  </div>

  

  <button type="submit" class="btn btn-success p-2">Create</button>
</form>
</div>

</form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
@endsection
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
@if(session('status'))
<div class="alert alert-success">{{session('status')}}</div>
@endif

<form action="{{url('users/create')}}" method="post">
@csrf
<div class="form-group p-2">
    <label for="exampleInputName">User Name</label>
    <input type="String" class="form-control" name="userName" placeholder="Enter Your Name">
   @error('userName') <span class="text-danger">{{$message}}</span> @enderror
  </div>
  <div class="form-group p-2">
    <label for="exampleInputEmail">User Email</label>
    <input type="email" class="form-control" name="userEmail" placeholder="Enter email">
    @error('userEmail') <span class="text-danger">{{$message}}</span> @enderror
  </div>

  <div class="form-group p-2">
    <label for="exampleInputGrade">Password</label>
    <input type="password" class="form-control" name="password" placeholder="Password">
    @error('password') <span class="text-danger">{{$message}}</span> @enderror
  </div>

  <div class="custom-control custom-radio">
  <input type="radio" id="customRadio1" name="radio[]" class="custom-control-input" value="Student">
  <label class="custom-control-label" for="customRadio1">Student</label>
  @error('radio') <span class="text-danger">{{$message}}</span> @enderror
</div>
<div class="custom-control custom-radio">
  <input type="radio" id="customRadio2" name="radio[]" class="custom-control-input" value="Teacher">
  <label class="custom-control-label" for="customRadio2">Teacher</label>
  @error('radio') <span class="text-danger">{{$message}}</span> @enderror
</div>
  <button type="submit" class="btn btn-primary p-2">Add</button>
</form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
@endsection
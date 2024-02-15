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

<form action="{{url('students/create')}}" method="post">
@csrf


  <div class="form-group p-2">
    <label for="exampleInputGrade">Student Grade</label>
    <input type="integer" class="form-control" name="grade" placeholder="Grade">
    @error('grade') <span class="text-danger">{{$message}}</span> @enderror
  </div>

  
  <button type="submit" class="btn btn-primary p-2">Add</button>
</form>
</div>
</body>
@endsection
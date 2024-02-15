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
    Featured
  </div>
  <div class="card-body">
    <h5 class="card-title">Teachers</h5>
    <p class="card-text"></p>
    
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Created At</th>
      <th scope="col">Updated At</th>
      <th scope="col">User Id</th>
      <th scope="col">Name</th>
      <th scope="col">Subject</th>
      <th scope="col">Email</th>
      <th scope="col">Actions</th>

    </tr>
  </thead>
  <tbody>
    @foreach($teachers as $teacher)
    <tr>
      <th scope="row">{{$teacher->id}}</th>
      <td>{{$teacher->created_at}}</td>
      <td>{{$teacher->updated_at}}</td>
      <td>{{$teacher->user_id}}</td>
      <td>{{$teacher->teacher_name}}</td>
      <td>{{$teacher->teacher_subject}}</td>
      <td>{{$teacher->teacher_email}}</td>
      <td>
        <a class="btn btn-success" href="#">Edit</a>
        <a class="btn btn-danger" href="#">Delete</a>
        
      </td>
    </tr>
    @endforeach
   
  </tbody>
</table>


  </div>
</div>
</div>
</body>
@endsection
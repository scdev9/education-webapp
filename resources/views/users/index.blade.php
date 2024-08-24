@extends('layouts.app')

@section('content')
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Users</title>
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
    <h5 class="card-title">User</h5>
    <p class="card-text"></p>
  <a href="{{url('users/create')}}" class="btn btn-primary">Add</a>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Role ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Created At</th>
      <th scope="col">Updated At</th>

    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
    <tr>
      <th scope="row">{{$user->id}}</th>
      <td>{{$user->role_id}}</td>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->created_at}}</td>
      <td>{{$user->updated_at}}</td>
      <td>
        <a class="btn btn-success" href="{{url('users/'.$user->id.'/edit')}}">Edit</a>
        <a class="btn btn-danger" href="{{url('users/'.$user->id.'/delete')}}">Delete</a>
        
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
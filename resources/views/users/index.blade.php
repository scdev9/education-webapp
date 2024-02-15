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
    Featured
  </div>
  <div class="card-body">
    <h5 class="card-title">User</h5>
    <p class="card-text"></p>
  <a href="{{url('users/create')}}" class="btn btn-primary">Add</a>
  </div>
</div>
</div>
</body>
@endsection
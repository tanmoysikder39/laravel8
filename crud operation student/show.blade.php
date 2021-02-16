
@extends('app')
@section('title')
    {{'Student Details'}}
@endsection
@section('content')
<div class="container">
  <div class="card">
    <div class="card-header d-sm-flex align-items-center justify-content-between">
         <h4>Student Details</h4>
         <a href="{{route('home')}}" class="btn btn-sm btn-info">All Student</a>
    </div>
    <div class="card-body">
      <p class="font-weight-bold">Name:</p>
      <p>{{$student->name}}</p>

      <p class="font-weight-bold">class:</p>
      <p>{{$student->class_name}}</p>

      <p class="font-weight-bold">Roll:</p>
      <p>{{$student->roll}}</p>

      <p class="font-weight-bold">Address:</p>
      <p>{{$student->adress}}</p>
    </div>
  </div>
</div> 
@endsection
@extends('layout')
@section('title')
    {{' Student Details'}}
@endsection
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header d-sm-flex align-items-center justify-content-between">
            <h4>student Details</h4>
            <a href="{{route('home')}}" class="btn btn-sm btn-info" >All student</a>
        </div>
        <div class="card-body">
            @if (Session::has('message'))
            <div class="alert alert-success m-auto text-center">
            <strong>{{Session::get('message')}}</strong>
             </div>
            @endif
          <p class="font-weight-bold" >Name:</p><br>
          <p>{{$student->name}}</p><br><br>

          <p class="font-weight-bold" >Email:</p><br>
          <p>{{$student->email}}</p><br><br>


          <p class="font-weight-bold" >Name:</p><br>
          <p>{{$student->number}}</p><br><br>


          <p class="font-weight-bold" >Image:</p><br>
          <p>{{$student->file}}</p><br><br>


          <p class="font-weight-bold" >Gender:</p><br>
          <p>{{$student->gender}}</p><br><br>

          <p class="font-weight-bold" >option:</p><br>
          <p>{{$student->option}}</p><br><br>
        </div>
    </div>
</div>    
@endsection
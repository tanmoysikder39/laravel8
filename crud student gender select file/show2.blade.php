@extends('app')
@section('title')
    {{'student Details'}}
@endsection
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header d-sm-flex align-items-center justify-content-between">
            <h4>all student</h4>
            <a href="{{route('home')}}" class="btn btn-sm btn-info" >All Student</a>
        </div>
        <div class="card-body">
            @if (Session::has('message'))
            <div class="alert alert-success">
            <strong>{{Session::get('message')}}</strong>
             </div>
            @endif
            <p class="font-weight-bold"> Name:</p>
            <p>{{$student->name}}</p>

            <p class="font-weight-bold">Email:</p>
            <p>{{$student->email}}</p>
      
            <p class="font-weight-bold">Number:</p>
            <p>{{$student->number}}</p>
      
            <p class="font-weight-bold">File:</p>
            <p>{{$student->file}}</p>

            <p class="font-weight-bold">Gender:</p>
            <p>{{$student->gender}}</p>

            <p class="font-weight-bold">cars:</p>
            <p>{{$student->option}}</p>
        </div>
    </div>
</div>    
@endsection
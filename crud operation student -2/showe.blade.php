@extends('appp')
@section('title')
    {{'view Student'}}
@endsection
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header d-sm-flex align-items-center justify-content-between">
            <h4>student info</h4>
            <a href="{{route('home')}}" class="btn btn-sm btn-info" >All student</a>
        </div>
        <div class="card-body">
            <p class="font-weight-bold">Name:</p>
            <p>{{$student->name}}</p>
            <br>
            <p class="font-weight-bold">Email:</p>
            <p>{{$student->email}}</p>
            <br>
            <p class="font-weight-bold">Password:</p>
            <p>{{$student->password}}</p>
            <br>
            <p class="font-weight-bold">Address:</p>
            <p>{{$student->address}}</p>
            <br>
        </div>
    </div>
</div>    
@endsection
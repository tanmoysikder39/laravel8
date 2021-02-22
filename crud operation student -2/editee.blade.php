@extends('appp')
@section('title')
    {{'Edit Student'}}
@endsection
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header d-sm-flex align-items-center justify-content-between">
            <h4>update student</h4>
            <a href="{{route('home')}}" class="btn btn-sm btn-info" >All student</a>
        </div>
        <div class="card-body">
            @if (Session::has('message'))
            <div class="alert alert- alert-warning">
            <strong>{{Session::get('message')}}</strong> 
             </div>   
            @endif
            <form action="{{route('update',$student->id)}}"method="post">
                @csrf
                @method('put')
                <input type="text"name="name"class="form-control @error('name') is-invalid @enderror"value="{{$student->name}}" placeholder="your full name" ><br>
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <input type="email"name="email"class="form-control @error('email') is-invalid @enderror"value="{{$student->email}}" placeholder="your email" ><br>
                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <input type="password"name="password"class="form-control @error('password') is-invalid @enderror"value="{{$student->password}}" placeholder="your password" ><br>
                @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <input type="text"name="address"class="form-control @error('address') is-invalid @enderror"value="{{$student->address}}" placeholder="your Location" >
                @error('address')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <br>
                <button class="btn btn-success"type="submit">Update</button>

            </form>
        </div>
    </div>
</div>    
@endsection
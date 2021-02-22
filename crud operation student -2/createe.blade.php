@extends('appp')
@section('title')
    {{'All Student'}}
@endsection
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header d-sm-flex align-items-center justify-content-between">
            <h4>Create student</h4>
            <a href="{{route('home')}}" class="btn btn-sm btn-info" >All student</a>
        </div>
        <div class="card-body">
            @if (Session::has('message'))
            <div class="alert alert-success">
            <strong>{{Session::get('message')}}</strong>
             </div>
            @endif
            <form action="{{route('store')}}"method="post">
                @csrf
                <input type="text"name="name"class="form-control @error('name') is-invalid @enderror"value="{{old('name')}}" placeholder="your full name" ><br>
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <input type="email"name="email"class="form-control @error('email') is-invalid @enderror"value="{{old('email')}}" placeholder="your email" ><br>
                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <input type="password"name="password"class="form-control @error('password') is-invalid @enderror"value="{{old('password')}}" placeholder="your password" ><br>
                @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <input type="text"name="address"class="form-control @error('address') is-invalid @enderror"value="{{old('address')}}" placeholder="your Location" >
                @error('address')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <br>
                <button class="btn btn-success"type="submit">Submit</button>

            </form>
        </div>
    </div>
</div>    
@endsection
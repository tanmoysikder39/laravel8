
@extends('app')
@section('title')
    {{'All students'}}
@endsection
@section('content')
<div class="container">
  <div class="card">
    <div class="card-header d-sm-flex align-items-center justify-content-between">
         <h4>Create Student</h4>
         <a href="{{route('home')}}" class="btn btn-sm btn-info">All Student</a>
    </div>
    <div class="card-body">
        @if(Session::has('message'))
       <div class="alert alert-success" >
            <strong>{{Session::get('message')}}</strong>
       </div>
        
        @endif
        <form action="{{route('store')}}" method="post">
        @csrf
        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{old('name')}}" placeholder="name"><br>
        @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <input type="text" class="form-control  @error('class_name') is-invalid @enderror" name="class_name"value="{{old('class_name')}}" placeholder="class name"><br>
        @error('class_name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input type="text" class="form-control @error('roll') is-invalid @enderror" name="roll"value="{{old('roll')}}" placeholder="class roll"><br>
        @error('roll')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input type="text" class="form-control   @error('adress') is-invalid @enderror" name="adress"value="{{old('adress')}}" placeholder="your adress"><br>
        @error('adress')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <button class="btn btn-success"type="submit">Create</button>
        </form>
    </div>
  </div>
</div> 
@endsection
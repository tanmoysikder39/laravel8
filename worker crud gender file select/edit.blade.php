@extends('layout')
@section('title')
    {{'Edit Student'}}
@endsection
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header d-sm-flex align-items-center justify-content-between">
            <h4>Edit student</h4>
            <a href="{{route('home')}}" class="btn btn-sm btn-info" >All student</a>
        </div>
        <div class="card-body">
            @if (Session::has('message'))
            <div class="alert alert-success">
            <strong>{{Session::get('message')}}</strong>
             </div>
            @endif
           <form action="{{url('update',$student->id)}}" method="post" enctype="multipart/form-data">
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
            <input type="text"name="number"class="form-control @error('number') is-invalid @enderror"value="{{$student->number}}" placeholder="your phonenumber" ><br>
            @error('number')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <input type="file"name="image"class="form-control @error('image') is-invalid @enderror"value="{{$student->file}}" placeholder="your file" >
            @error('image')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <br>
          

            <input type="radio" id="male" name="gender"class=" @error('gender') is-invalid @enderror"  value="male"  {{ ($student->gender=="male")? "checked" : "" }}>
             <label for="male">Male</label><br>
             <input type="radio" id="female" name="gender"class=" @error('gender') is-invalid @enderror" value="female"  {{ ($student->gender=="female")? "checked" : "" }}>
              <label for="female">Female</label><br>
              @error('gender')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
              <br>

            <label for="cars">Choose a car:</label>
            <select name="cars" id="cars"class=" @error('cars') is-invalid @enderror" multiple>
                <option value="volvo" @if($student->option =='volvo') {{'selected'}} @endif>Valvo</option>
                <option value="Saab" @if($student->option =='Saab') {{'selected'}} @endif>Saab</option>
                <option value="opel" @if($student->option =='opel') {{'selected'}} @endif>opel</option>
                <option value="audi" @if($student->option =='audi') {{'selected'}} @endif>audi</option>
              </select>
            @error('cars')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <br>
             
            <button class="btn btn-success"type="submit">Submit</button>


           </form>
        </div>
    </div>
</div>    
@endsection
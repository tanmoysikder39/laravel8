@extends('app')
@section('title')
    {{'All Student'}}
@endsection
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header d-sm-flex align-items-center justify-content-between">
            <h4>create student</h4>
            <a href="{{route('home')}}" class="btn btn-sm btn-info" >All student</a>
        </div>
        <div class="card-body">
            @if (Session::has('message'))
            <div class="alert alert-success">
            <strong>{{Session::get('message')}}</strong>
             </div>
            @endif
           <form action="{{url('store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="text"name="name"class="form-control @error('name') is-invalid @enderror"value="{{old('name')}}" placeholder="your full name" ><br>
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <input type="email"name="email"class="form-control @error('email') is-invalid @enderror"value="{{old('email')}}" placeholder="your email" ><br>
            @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <input type="text"name="number"class="form-control @error('number') is-invalid @enderror"value="{{old('number')}}" placeholder="your phonenumber" ><br>
            @error('number')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <input type="file"name="image"class="form-control @error('image') is-invalid @enderror"value="{{old('image')}}" placeholder="your file" >
            @error('image')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <br>
          

            <input type="radio" id="male" name="gender"class=" @error('gender') is-invalid @enderror" value="mail">
             <label for="male">Male</label><br>
             <input type="radio" id="female" name="gender"class=" @error('gender') is-invalid @enderror" value="female">
              <label for="female">Female</label><br>
              @error('gender')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
              <br>

            <label for="cars">Choose a car:</label>
            <select name="cars" id="cars"class=" @error('cars') is-invalid @enderror" multiple>
              <option value="volvo">Volvo</option>
              <option value="saab">Saab</option>
              <option value="opel">Opel</option>
              <option value="audi">Audi</option>
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
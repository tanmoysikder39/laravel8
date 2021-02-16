
@extends('app')
@section('title')
    {{'All students'}}
@endsection
@section('content')
<div class="container">
  <div class="card">
    <div class="card-header d-sm-flex align-items-center justify-content-between">
         <h4>All Student</h4>
         <a href="{{route('create')}}" class="btn btn-sm btn-info">Create</a>
    </div>
    <div class="card-body">
       @if(Session::has('message'))
       <div class="alert alert-success" >
            <strong>{{Session::get('message')}}</strong>
       </div>
        
        @endif
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>Name</th>
            <th>Class</th>
            <th>Roll</th>
            <th>Address</th>
            <th>Option</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($students as $student)<!-- object name student !-->
          <tr>
            <td>{{++$loop->index}}</td>
            <td>{{$student->name}}</td>
            <td>{{$student->class_name}}</td>
            <td>{{$student->roll}}</td>
            <td>{{$student->adress}}</td>
            <td>
              <a href="{{route('show',$student->id)}}" class="btn btn-sm btn-info">view</a>
              <a href="{{route('edit',$student->id)}}" class="btn btn-sm btn-success">Edit</a>
              <form action="{{route('delete',$student->id)}}"method="POST">
              @csrf
              @method('delete')
              <button class="btn btn-sm btn-danger" >Delete</button>
              
              </form>

             
            </td>
          </tr>  
          @endforeach
          
        </tbody>
      </table>
    </div>
  </div>
</div> 
@endsection
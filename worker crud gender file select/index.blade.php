@extends('layout')
@section('title')
    {{'All Student'}}
@endsection
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header d-sm-flex align-items-center justify-content-between">
            <h4>all student</h4>
            <a href="{{url('create')}}" class="btn btn-sm btn-info" >Create</a>
        </div>
        <div class="card-body">
            @if (Session::has('message'))
            <div class="alert alert-success m-auto text-center">
            <strong>{{Session::get('message')}}</strong>
             </div>
            @endif
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Number</th>
                        <th>File</th>
                        <th>Gender</th>
                        <th>option</th>
                        <th>brand</th>
                        
                    </tr>
                 </thead>
                 <tbody>
                     @foreach ($worker as $item)
                     <tr>
                        <td>{{++$loop->index}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->number}}</td>
                        <td>{{$item->file}}</td>
                        <td>{{$item->gender}}</td>
                        <td>{{$item->option}}</td>
                       
                      
                        <td>
                            <a href="{{url('view',$item->id)}}"class="btn btn-sm btn-secondary">View</a>
                            <a href="{{url('edit',$item->id)}}"class="btn btn-sm btn-primary">Edit</a>
                        <form action="{{url('delete',$item->id)}}" method="POST" enctype="multipart/form-data" >
                        @csrf
                        @method('delete')
                        <button class="btn-btn-sm btn-danger" >Delete</button>
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
@extends('appp')
@section('title')
    {{'All Student'}}
@endsection
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header d-sm-flex align-items-center justify-content-between">
            <h4>all student</h4>
            <a href="{{route('create')}}" class="btn btn-sm btn-info" >Create</a>
            <a href="{{route('home')}}"class="btn-sm btn btn-primary">Back Home</a>
        </div>
        <div class="card-body">
            @if (Session::has('message'))
            <div class="alert alert-success">
            <strong>{{Session::get('message')}}</strong>
             </div>
            @endif
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                 </thead>
                 <tbody>
                     @foreach ($student as $item)
                     <tr>
                        <td>{{++$loop->index}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->password}}</td>
                        <td>{{$item->address}}</td>
                        <td>
                            <a href="{{route('show',$item->id)}}"class="btn btn-sm btn-secondary">View</a>
                            <a href="{{route('edit',$item->id)}}"class="btn btn-sm btn-primary">Edit</a>
                            <form action="{{route('delete',$item->id)}}" method="post" >
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger btn-sm">Delete</button>
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
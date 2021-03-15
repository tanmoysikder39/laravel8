<h1 style="color: red;" >All Member List</h1>
<table border="2px" >
    <thead>
        <tr>
            <th>id local</th>
            <th>ID</th>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>ADRESS</th>
            <th>Operation</th>
        </tr>
    </thead>
    <tbody>
       @foreach ($databaseinput as $item)
       <tr>
        <td>{{++$loop->index}}</td>
        <td>{{$item->id}}</td>
        <td>{{$item->name}}</td>
        <td>{{$item->email}}</td>
        <td>{{$item->address}}</td>
        <td><a href="{{url('iddelete',$item->id)}}">DELETE</a>
            <a href="{{url('edit',$item->id)}}">EDIT</a>
        </td>
        
    </tr>
       @endforeach
    </tbody>
</table>
@if (Session::has('message'))
<div style="color: red">
<strong>{{Session::get('message')}}</strong>
</div>
    
@endif
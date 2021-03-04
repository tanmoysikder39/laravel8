<h1>member list</h1>
<table border="1">
    <tr>
        <th>id</th>
        <th>name</th>
        <th>email</th>
        <th>address</th>
    </tr>
    
       @foreach ($allmember as $item)
       <tr>
        <td>{{$item['id']}}</td>
        <td>{{$item->name}}</td>
        <td>{{$item['email']}}</td>
        <td>{{$item['address']}}</td>
    </tr>
       @endforeach
    
</table>
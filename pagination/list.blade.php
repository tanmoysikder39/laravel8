<h1>Members list</h1>
<table border="1">
<thead>
     <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Address</th>
     </tr>
</thead>
<tbody>
@foreach ($allmember as $member)
<tr>
    <td>{{$member->id}}</td>
    <td>{{$member->name}}</td>
    <td>{{$member->email}}</td>
    <td>{{$member->address}}</td>
</tr>
@endforeach
</tbody>


</table>
<span>
    {{$allmember->links()}}
</span>
<style>
    .w-5{
        display: none;
    }
</style>
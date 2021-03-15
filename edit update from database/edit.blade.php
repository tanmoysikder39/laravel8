<h1>UPDATE MEMBER</h1>
@if (Session::has('message'))
<div style="color: red">
<strong>{{Session::get('message')}}</strong>
</div>
    
@endif
<form action="{{url('edit')}}" method="POST">
    @csrf
    @method('post')
    <input type="hidden" name="id" value="{{$data->id}}">
    <input type="text" name="name" value="{{$data->name}}"><br> <br>
    <input type="email" name="email"value="{{$data->email}}"><br> <br>
    <input type="text" name="address"value="{{$data->address}}"><br> <br>
    <button type="submit">UPDATE</button>

</form>

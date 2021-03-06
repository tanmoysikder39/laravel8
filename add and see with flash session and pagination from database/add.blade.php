<h1>Add Member</h1>
@if (session('name'))
<h3 style="color: red;">ID has been added</h3>
    
@endif
<form action="addm"method="post">
    @csrf
    <input type="text"name="name"placeholder="Your Name"><br> <br>
    <input type="text"name="email"placeholder="Your Email"><br> <br>
    <input type="text"name="address"placeholder="Your address"><br> <br>
    <button type="submit" >Submit</button>
</form>
<a href="{{url('list')}}">all data</a>
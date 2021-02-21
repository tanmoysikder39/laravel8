<form action="user" method="post" >
    @csrf
    <input type="text" name="name" placeholder="your name" ><br>
    @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <input type="password" name="password" placeholder="your password" ><br>
    @error('password')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <button type="submit" >submit</button>

</form>
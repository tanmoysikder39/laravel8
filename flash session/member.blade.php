<h1>Add Member</h1>
@if (session("name"))
<h3 style="color:red">{{session('name')}}  has been added</h3>
    
@endif
<form action="add" method="POST">
    @csrf
  <div>  <label for="name">YOUR NAME</label></div>
    <input type="text"name="name"id="name" placeholder="user name"><br><br>
   <div> <label for="email">YOUR EMAIL</label></div>
    <input type="email"name="email" id="email" placeholder="user email"><br><br>
    <div><label for="password">YOUR PASSWORD</label></div>
    <input type="password"name="password" id="password" placeholder="user password"><br><br>
    <button>ADD MEMBER</button>
</form>
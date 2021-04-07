@extends('layouts.layout')
@section('food')

<div class="container">
    <center><h1>Login</h1></center>
    <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  
    Not a member? <a href="/register">Register</a>
  <br><br>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection
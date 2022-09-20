@extends('layouts/app')

@section('content')
<div class="container mt-4" style="width: 40%;">
<h1 class="text-center">Sign Up</h1>
<form action="/signup" method="post">
    @csrf
<div class="form-group">
    <label for="">Username</label>
    <input type="text" class="form-control" name="username">
</div>  

<br>

<div class="form-group">
    <label for="">Telephone Number</label>
    <input type="text" class="form-control" name="phone">
</div>  

<br>

<div class="form-group">
    <label for="">Email</label>
    <input type="email" class="form-control" name="email">
</div>  

<br>

<div class="form-group">
    <label for="">Password</label>
    <input type="password" class="form-control" name="password">
</div>  

<br>

<button type="submit" class="btn btn-success">Sign Up</button>
<br>
<a href="/login">Do you have an account?login</a>
</form>
</div>
@endsection
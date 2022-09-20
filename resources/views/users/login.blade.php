@extends('layouts/app')

@section('content')
<div class="container mt-4" style="width: 40%;">
<h1 class="text-center">Login</h1>
<form action="/login" method="post">
@csrf
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

<button type="submit" class="btn btn-success">Login</button>
<br>
<a href="/signup">Don't have an account?signup</a>
</form>
</div>
@endsection
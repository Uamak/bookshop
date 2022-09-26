@extends('layouts/app')

@section('content')

<h1 class="text-center">Create Customer</h1>

<div class="container" style="width: 40%;">
    <form action="/customers" method="post">
        @csrf
        <div class="form-group">
            <label for="" class="form-label">First Name</label>
            <input type="text" name="firstname" class="form-control">
        </div>

        <div class="form-group">
            <label for="" class="form-label">Last Name</label>
            <input type="text" name="lastname" class="form-control">
        </div>

        <br>

        <div class="form-group">
            <label for="" class="form-label">Telephone</label>
            <input type="text" name="telephone" class="form-control">
        </div>
        <br>
        <div class="form-group">
            <label for="" class="form-label">Email</label>
            <input type="email" name="email" class="form-control">
        </div>
        <br>
        <button type="submit" class="btn btn-outline-success">Create customer</button>
    </form>
</div>
    
@endsection
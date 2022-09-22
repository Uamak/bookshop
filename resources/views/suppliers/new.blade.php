@extends('layouts/app')

@section('content')

<h1 class="text-center">Create Supplier</h1>

<div class="container" style="width: 40%;">
    <form action="/suppliers" method="post">
        @csrf
        <div class="form-group">
            <label for="" class="form-label">First Name</label>
            <input type="text" name="firstname" class="form-control">
        </div>
        <br>
        <div class="form-group">
            <div class="form-group">
                <label for="" class="form-label">Last Name</label>
                <input type="text" name="lastname" class="form-control">
            </div>
            <br>
            <label for="" class="form-label">Telephone</label>
            <input type="text" name="telephone" class="form-control">
        </div>
        <br>
        <div class="form-group">
            <label for="" class="form-label">Address</label>
            <input type="text" name="address" class="form-control">
        
        <br>
        <div class="form-group">
            <label for="" class="form-label">Email</label>
            <input type="text" name="email" class="form-control">
            <br>
        <button type="submit" class="btn btn-outline-success">Create supplier</button>
    </form>
</div>
    
@endsection
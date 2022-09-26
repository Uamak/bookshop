@extends('layouts/app')

@section('content')

<h1 class="text-center">Update Supplier</h1>

<div class="container" style="width: 40%;">
    <form action="/suppliers/{{$supplier->id}}" method="post">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="" class="form-label">First Name</label>
            <input type="text" name="first_name" class="form-control" value="{{$supplier->first_name}}">
        </div>

        <div class="form-group">
            <label for="" class="form-label">Last Name</label>
            <input type="text" name="last_name" class="form-control" value="{{$supplier->last_name}}">
        </div>

        <br>

        <div class="form-group">
            <label for="" class="form-label">Telephone</label>
            <input type="text" name="telephone" class="form-control" value= "{{$supplier->telephone}}">
        </div>
        <br>
        <div class="form-group">
            <label for="" class="form-label">Email</label>
            <input type="text" name="email" class="form-control" value="{{$supplier->email}}">
        </div>
        <br>
        <div class="form-group">
            <label for="" class="form-label">Address</label>
            <input type="text" name="address" value="{{$supplier->address}}" class="form-control">
        </div>
        <br>
        <button type="submit" class="btn btn-outline-success">Update supplier</button>
    </form>
</div>
    
@endsection
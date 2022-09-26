@extends('layouts/app')

@section('content')

<h1 class="text-center">Update customer</h1>

<div class="container" style="width: 40%;">
    <form action="/customers/{{$customer->id}}" method="post">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="" class="form-label">First Name</label>
            <input type="text" name="firstname" class="form-control" value="{{$customer->firstname}}">
        </div>

        <div class="form-group">
            <label for="" class="form-label">Last Name</label>
            <input type="text" name="lastname" class="form-control" value="{{$customer->lastname}}">
        </div>

        <br>

        <div class="form-group">
            <label for="" class="form-label">Telephone</label>
            <input type="text" name="telephone" class="form-control" value= "{{$customer->telephone}}">
        </div>
        <br>
        <div class="form-group">
            <label for="" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" value="{{$customer->email}}">
        </div>
        <br>
        <button type="submit" class="btn btn-outline-success">Update customer</button>
    </form>
</div>
    
@endsection
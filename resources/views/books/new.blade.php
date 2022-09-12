@extends('layouts/app')

@section('content')

<h1 class="text-center">Create Book</h1>

<div class="container" style="width: 40%;">
    <form action="/books" method="post">
        @csrf
        <div class="form-group">
            <label for="" class="form-label">Book Title</label>
            <input type="text" name="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="" class="form-label">Book Price</label>
            <input type="text" name="price" class="form-control">
        </div>

        <br>

        <div class="form-group">
            <label for="" class="form-label">Quantity</label>
            <input type="text" name="quantity" class="form-control">
        </div>
        <br>
        <div class="form-group">
            <label for="" class="form-label">Image</label>
            <input type="text" name="image" class="form-control">
        </div>
        <br>
        <div class="form-group">
            <label for="" class="form-label">Epilogue</label>
            <textarea name="description"  class="form-control"></textarea>
        </div>
        <br>
        <button type="submit" class="btn btn-outline-success">Create book</button>
    </form>
</div>
    
@endsection
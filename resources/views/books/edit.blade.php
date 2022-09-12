@extends('layouts/app')

@section('content')

<h1 class="text-center">Update Book</h1>

<div class="container" style="width: 40%;">
    <form action="/books/{{$book->id}}" method="post">
        @csrf
        <div class="form-group">
            <label for="" class="form-label">Book Title</label>
            <input type="text" name="name" class="form-control" value="{{$book->name}}">
        </div>

        <div class="form-group">
            <label for="" class="form-label">Book Price</label>
            <input type="text" name="price" class="form-control" value="{{$book->price}}">
        </div>

        <br>

        <div class="form-group">
            <label for="" class="form-label">Quantity</label>
            <input type="text" name="quantity" class="form-control" value= "{{$book->quantity}}">
        </div>
        <br>
        <div class="form-group">
            <label for="" class="form-label">Image</label>
            <input type="text" name="image" class="form-control" value="{{$book->image}}">
        </div>
        <br>
        <div class="form-group">
            <label for="" class="form-label">Epilogue</label>
            <textarea name="description"  class="form-control">{{$book->description}}</textarea>
        </div>
        <br>
        <button type="submit" class="btn btn-outline-success">update book</button>
    </form>
</div>
    
@endsection
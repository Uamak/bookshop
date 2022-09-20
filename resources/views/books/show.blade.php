@extends('layouts/app')

@section('content')



<h1>{{$book->name}}</h1>
<h1>{{$book->price}}</h1>
<h1>{{$book->quantity}}</h1>
<h1>{{$book->description}}</h1>

<form action="/cart" method="post">
    @csrf
<input type="text" value="{{$book->id}}" name="product_id" hidden>
<input type="text" value="{{auth()->user()->id}}" name="user_id" hidden>
<button class="btn btn-outline-primary" type="submit">Add to cart</button>
</form>
<hr>
<a href="/books/{{$book->id}}/edit" class="btn btn-outline-secondary">Update</a>
<form action="/books/{{$book->id}}" method="post">
@method("delete")
@csrf
<button type="submit" class="btn btn-outline-danger">Delete</button>
</form>

    

    
@endsection
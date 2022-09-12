@extends('layouts/app')

@section('content')



<h1>{{$book->name}}</h1>
<h1>{{$book->price}}</h1>
<h1>{{$book->quantity}}</h1>
<h1>{{$book->description}}</h1>

<a href="/books/{{$book->id}}/edit" class="btn btn-outline-secondary">Update</a>
<form action="/books/{{$book->id}}" method="post">
@csrf
<button type="submit" class="btn btn-outline-danger">Delete</button>
</form>

    

    
@endsection
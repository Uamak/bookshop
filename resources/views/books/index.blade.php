@extends('layouts/app')

@section('content')

@foreach ($books as $book)

<h1>{{$book->name}} <a href="/books/{{$book->id}}">Show Book</a></h1>
    
@endforeach
    
@endsection
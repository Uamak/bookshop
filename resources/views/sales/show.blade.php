@extends('layouts/app')
@section('content')
<div class="container mt-5">
<table class="table">
    <h1 class="text-center">Sales History..</h1>
    <thead class="bg-info">
        <tr>
            <th>id</th>
            <th>Customer id</th>
            <th>Customer name</th>
            <th>Book id</th>
            <th>Book Name</th>
            <th>Quantity</th>
            <th>Selling Price</th>
            <th>Total</th>
            {{-- <th>Operations</th> --}}
           
        </tr>
</thead>
<tbody>
    @foreach ($sale as $sale)
        
    <tr>
        <td>{{$sale->id}}</td>
        <td>{{$sale->customer_id}}</td>
        <td>{{$sale->firstname}}</td>
        <td>{{$sale->book_id}}</td>
        <td>{{$sale->name}}</td>
        <td>{{$sale->quantity}}</td>
        <td>{{$sale->sellingprice}}</td>
        <td>{{$sale->total}}</td>
        {{-- <td><a href="" class="btn btn-info btn-sm">Show Sale</a>||<a href="" class="btn btn-primary btn-sm">Update</a>||<form action="" class="d-inline"><button class="btn btn-outline-danger btn-sm">Delete Sale</button></form></td> --}}
    </tr>
    @endforeach
</tbody>
</table>
</div>
@endsection
 

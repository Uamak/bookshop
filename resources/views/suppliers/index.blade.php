@extends('layouts/app')

@section('content')

<div class="container mt-4">
<h1 class="text-center">All suppliers</h1> 
<table class="table mt-4">
    <thead class="bg-success">
        <tr>
            <th>id</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Telephone</th>
            <th>Email</th>
            <th>Address</th>
            <th>Operations</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($suppliers as $supplier)
        <tr>
            <td>{{$supplier->id}}</td>
            <td>{{$supplier->first_name}}</td>
            <td>{{$supplier->last_name}}</td>
            <td>{{$supplier->telephone}}</td>
            <td>{{$supplier->email}}</td>
            <td>{{$supplier->address}}</td>
            <td><a href="/suppliers/{{$supplier->id}}" class="btn btn-primary btn-sm">View Supplier</a>||<a href="/suppliers/{{$supplier->id}}/edit" class="btn btn-secondary btn-sm">Update Supplier</a>||<form class="d-inline" action="/suppliers/{{$supplier->id}}" method="post">@csrf @method('delete') <button type="submit" class="btn btn-outline-warning btn-sm">Delete</button></form></td>
        </tr>
        @endforeach
        
    </tbody>
</table>
</div>
@endsection

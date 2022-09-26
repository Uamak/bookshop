@extends('layouts/app')

@section('content')

<div class="container mt-4">
<h1 class="text-center">All customers</h1> 
<table class="table mt-4">
    <thead class="bg-success">
        <tr>
            <th>id</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Telephone</th>
            <th>Email</th>
            <th>Operations</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($customers as $customer)
        <tr>
            <td>{{$customer->id}}</td>
            <td>{{$customer->firstname}}</td>
            <td>{{$customer->lastname}}</td>
            <td>{{$customer->telephone}}</td>
            <td>{{$customer->email}}</td>
            <td><a href="/customers/{{$customer->id}}" class="btn btn-primary btn-sm">View customer</a>||<a href="/customers/{{$customer->id}}/edit" class="btn btn-secondary btn-sm">Update customer</a>||<form class="d-inline" action="/customers/{{$customer->id}}" method="post">@csrf @method('delete') <button type="submit" class="btn btn-outline-warning btn-sm">Delete</button></form></td>
        </tr>
        @endforeach
        
    </tbody>
</table>
</div>
@endsection

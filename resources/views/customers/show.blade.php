@extends('layouts/app')

@section('content')

<div class="container mt-4">
<h1 class="text-center">{{$customer->firstname}}</h1> 
<table class="table mt-4">
    <thead class="bg-success">
        <tr>
            <th>id</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Telephone</th>
            <th>Email</th>
                 {{-- <th>Operations</th> --}}
        </tr>
    </thead>

    <tbody>

        <tr>
            <td>{{$customer->id}}</td>
            <td>{{$customer->firstname}}</td>
            <td>{{$customer->lastname}}</td>
            <td>{{$customer->telephone}}</td>
            <td>{{$customer->email}}</td>
                        {{-- <td><a href="/suppliers/{{$supplier->id}}" class="btn btn-primary btn-sm">View Supplier</a>||<a href="" class="btn btn-secondary btn-sm">Update Supplier</a>||<a href="" class="btn btn-warning btn-sm">Delete</a></td> --}}
        </tr>
        
    </tbody>
</table>
</div>
@endsection

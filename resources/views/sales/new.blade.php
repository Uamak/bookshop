@extends('layouts/app')

@section('content')

<h1 class="text-center">Sales Page</h1>

<div class="container" style="width: 40%;">
    <form action="/sales" method="post">
        @csrf
        <div class="form-group">
            <label for="" class="form-label">Customer</label>
            <select name="customer" id="" class="form-select">
                @foreach ($customers as $customer)
                    <option value="{{$customer->id}}">{{$customer->firstname}}</option>
                @endforeach
            </select>
        </div>
        <br>
        <div class="form-group">
            <label for="" class="form-label">Book</label>
            <select name="book" id="" class="form-select">
                @foreach ($books as $book)
                    <option value="{{$book->id}}">{{$book->name}}</option>
                @endforeach
            </select>
        </div>
        <br>
        <div class="form-group">
            <label for="" class="form-label">Quantity</label>
            <input type="text" name="quantity" class="form-control">

        <br>
        <div class="form-group">
            <label for="" class="form-label">Selling Price</label>
            <input type="text" name="sellingprice" class="form-control">
            <br>
        <button type="submit" class="btn btn-outline-success">Make Sale</button>
    </form>
</div>
    
@endsection
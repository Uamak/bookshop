<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Customer;
use App\Models\Sales;
use Illuminate\Http\Request;

class SalesController extends Controller
{

    public function index()
    {
        dd(Sales::with('customers')->get());
    }


    public function create()
    {
        $customers = Customer::get();
        $books = Book::get();
        return view('sales/new' , ['customers'=>$customers , 'books'=>$books]);
    }


    public function store(Request $request)
    {
        Sales::create([
            'customer_id'=>$request->customer,
            'book_id'=>$request->book,
            'quantity'=>$request->quantity,
            'sellingprice'=>$request->sellingprice,
        ]);

        return redirect('/sales/new');
    }

 
    public function show($id)
    {
        //
    }

 
    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

 
    public function destroy($id)
    {
        //
    }
}

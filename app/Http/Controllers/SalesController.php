<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Customer;
use App\Models\Sale;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SalesController extends Controller
{

    public function index()
    {
    //    $sales = DB::table('sales')->join('customers' , 'customers.id' , 'sales.customer_id')
    //    ->join('books' , 'books.id' , 'sales.book_id' )
    //    ->get();

        $sales = DB::table('sales')
        ->join('customers' , 'customers.id' , '=' , 'sales.customer_id')
        ->join('books' , 'books.id' , 'sales.book_id')
        // ->select('sales.*' , 'sales.id')
        ->get(['sales.id' , 'sales.customer_id' , 'books.name' ,'sales.book_id' ,'sales.sellingprice' , 'sales.quantity' , 'sales.total' ,'customers.firstname']);
       

        // dd($res);

        return view('sales/index' , ['sales'=>$sales]);
        

    }


    public function create()
    {
        $customers = Customer::get();
        $books = Book::get();
        return view('sales/new' , ['customers'=>$customers , 'books'=>$books]);
    }


    public function store(Request $request)
    {
        Sale::create([
            'customer_id'=>$request->customer,
            'book_id'=>$request->book,
            'quantity'=>$request->quantity,
            'sellingprice'=>$request->sellingprice,
            'total'=>$request->quantity*$request->sellingprice,
        ]);

        return redirect('/sales/new');
    }

 
    public function show($id)
    {
        // $sale = $Sale::find($id)
        $sale = DB::table('sales')
        ->join('books' , 'books.id' , 'sales.book_id')
        ->join('customers' , 'customers.id' , 'sales.customer_id')
        ->where('sales.id' , '=' , $id)
        ->get(['sales.id' ,'sales.customer_id' , 'books.name' ,'sales.book_id' ,'sales.sellingprice' , 'sales.quantity' , 'sales.total' ,'customers.firstname']);
        // dd($sale);
        return view('sales/show' , ['sale'=>$sale]);
    }

 
    public function edit($id)
    {
        $sale = Sale::find($id);
        $customers = Customer::get();
        $books = Book::get();
        return view('sales/edit' , ['sale'=>$sale , 'customers'=>$customers , 'books'=>$books]);

    }


    public function update(Request $request, $id)
    {
        $sale = Sale::find($id);

        $sale->customer_id = $request->customer;
        $sale->book_id = $request->book;
        $sale->quantity = $request->quantity;
        $sale->sellingprice = $request->sellingprice;
        $sale->total = 0 ;
        $sale->total = $sale->total * $request->quantity;

        $sale->save();

        return redirect('/sales');


    }

 
    public function destroy($id)
    {
        //
    }
}

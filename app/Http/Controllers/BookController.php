<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Book;

class BookController extends Controller
{
    //
    function index () {
        $books = Book::get();
        return view('books/index' , [
            'books'=>$books
        ]);
    }

    function createBook () {
        return view('books/new');
    }

    function store (Request $request) {
        Book::create([
    
            'name'=>$request->name,
            'quantity'=>$request->quantity,
            'price'=>$request->price,
            'image'=>$request->image,
            'description'=>$request->description,
        ]);
    
        return redirect("/books/new");
    }

    function show($id){

        $book = Book::find($id);
    
        return view("/books/show" , [
            'book'=>$book
        ]);
    
    }

    function delete ($id) {
        $book = Book::find($id);
    
        $book->delete();
    
        return redirect('/books');
    
    }

    function updatePage($id) {
        $book = Book::find($id);
        return view('books/edit' , [
            'book'=>$book
        ]);
    }

    function update (Request $request , $id) {
        $book = Book::find($id);
        $book->name = $request->name;
        $book->price = $request->price;
        $book->quantity = $request->quantity;
        $book->image = $request->image;
        $book->description= $request->description;
        $book->save();
        return redirect("/books");
    
    }
}

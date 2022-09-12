<?php

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/books', function () {

    $books = Book::get();


    return view('books/index' , [
        'books'=>$books
    ]);
});

Route::get('/books/new', function () {
    return view('books/new');
});
Route::post('/books', function (Request $request) {
    Book::create([

        'name'=>$request->name,
        'quantity'=>$request->quantity,
        'price'=>$request->price,
        'image'=>$request->image,
        'description'=>$request->description,
    ]);

    return redirect("/books/new");
});

Route::get("/books/{id}" , function($id){

    $book = Book::find($id);

    return view("/books/show" , [
        'book'=>$book
    ]);

});

Route::post('/books/{id}', function ($id) {
    $book = Book::find($id);

    $book->delete();

    return redirect('/books');

});

Route::get('/books/{id}/edit', function ($id) {
    $book = Book::find($id);

    return view('books/edit' , [

        'book'=>$book
    ]);

});

Route::post('/books/{id}', function (Request $request , $id) {
    $book = Book::find($id);

    $book->name = $request->name;
    $book->price = $request->price;
    $book->quantity = $request->quantity;
    $book->image = $request->image;
    $book->description= $request->description;
    $book->save();

    return redirect("/books");

});


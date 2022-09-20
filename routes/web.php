<?php

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Cart;
use Illuminate\Support\Facades\Hash;

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
})->middleware('auth');
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

Route::delete('/books/{id}', function ($id) {
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

Route::get("/signup" , function(){


    return view("users/signup");

});

Route::get("/login" , function(){


    return view("users/login");

})->name('login');

Route::post("/signup" , function(Request $request){

    User::create([
        'email'=>$request->email,
        'username'=>$request->username,
        'password'=>Hash::make($request->password),
        'telephone'=>$request->phone,
    ]);

    auth()->attempt($request->only('email' , 'password'));

    return redirect('/books');

});

Route::post("/login" , function(Request $request){

    auth()->attempt($request->only('email' , 'password'));

    return redirect('/books');


});

Route::post('/cart' , function(Request $request){

    $cart = Cart::get()->where('product_id' , $request->product_id)->where('user_id' , $request->user_id);

    if(count($cart)>0){
        dd($cart[0]);
        
        // $cart[0]->quantity++;

        // return redirect('/books');

    }else{

        Cart::create([

            'user_id'=>$request->user_id,
            'product_id'=>$request->product_id,
        ]);
    
        return redirect('/books');
    
    }


   
});


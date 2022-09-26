<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\SuppliersController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SalesController;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

Route::get('/books', [BookController::class , 'index']);

Route::get('/books/new', [BookController::class , 'createBook'] )->middleware('auth');

Route::post('/books', [BookController::class , 'store']);

Route::get("/books/{id}" , [BookController::class , 'show']);

Route::delete('/books/{id}', [BookController::class , 'delete']);

Route::get('/books/{id}/edit', [BookController::class , 'updatePage']);

Route::post('/books/{id}', [BookController::class , 'update']);

Route::get("/signup" , [AuthController::class , 'register']);

Route::get("/login" , [AuthController::class , 'loginPage'])->name('login');

Route::post("/signup" , [AuthController::class , 'signupStore']);

Route::post("/login" , [AuthController::class , 'loginStore']);

Route::get("/suppliers/new" , [SuppliersController::class , 'create']);

Route::get("/suppliers" , [SuppliersController::class , 'index']);

Route::post("/suppliers" , [SuppliersController::class , 'store']);

Route::get("/suppliers/{id}" , [SuppliersController::class , 'show']);

Route::delete('/suppliers/{id}', [SuppliersController::class , 'destroy']);

Route::get('/suppliers/{id}/edit', [SuppliersController::class , 'update']);

Route::patch('/suppliers/{id}', [SuppliersController::class , 'edit']);

Route::get("/customers/new" , [CustomerController::class , 'create']);

Route::get("/customers" , [CustomerController::class , 'index']);

Route::post("/customers" , [CustomerController::class , 'store']);

Route::get("/customers/{id}" , [CustomerController::class , 'show']);

Route::delete('/customers/{id}', [CustomerController::class , 'destroy']);

Route::get('/customers/{id}/edit', [CustomerController::class , 'edit']);

Route::patch('/customers/{id}', [CustomerController::class , 'update']);

Route::get('/sales/new', [SalesController::class , 'create']);

Route::post("/sales" , [SalesController::class , 'store']);

Route::get("/sales" , [SalesController::class , 'index']);



    
    


   



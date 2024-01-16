<?php

use App\Models\Book;
use Illuminate\Support\Facades\Route;
use App\Models\Author;
use App\Models\Client;
use App\Models\Order;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get("/test", function(){
//     return Book::with('authors')->first();
// });

Route::get("/authors-with-books", function(){
    return Author::with('books')->get();
});

Route::get("/clients/orders", function(){
    return Client::with('orders')->get();
});

Route::get("/books/orders", function(){
    return Book::with('orders')->get();
});

Route::get("/orders/books", function(){
    return Order::with('books')->get();
});

Route::get("/orders/client", function(){
    return Order::with('client')->get();
});

Route::get("/clients/{clientId}/books", function($clientId){
    $client = Client::findOrFail($clientId);
    $books = $client->orders->flatMap(function ($order) {
        return $order->books;
    });
    return $books;
});
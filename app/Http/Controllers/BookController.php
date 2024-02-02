<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Models\Author;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    return view ('books.index', [
        'books' => Book::paginate(35)
    ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $authors = Author::all();
        return view('books.create', compact('authors'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'author_id' => 'required|exists:authors,id',
            'price' => 'required|numeric',
            "summary" => "required",
            "release_date" => "required|date",
            "language" => "required",
            "cover_path" => "required",
            "type" => "required",
            "pages" => "required|numeric",
            "stock_saldo" => "required|numeric",
        ]);
    
        $book = Book::create($request->only('title', 'price', 'release_date', 'cover_path', 'language', 'summary', 'stock_saldo', 'pages', 'type'));
    
        $book->authors()->attach($request->author_id);
    
        return redirect()->route('books.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        //
    }
}

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

    $data = $request->all();

    $data['release_date'] = date('Y', strtotime($request->release_date));

    // Remove author_id from $data
    $author_id = $data['author_id'];
    unset($data['author_id']);

    $book = Book::create($data);

    // Attach the author to the book
    $book->authors()->attach($author_id);

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
        $authors = Author::all(); // Retrieve all authors
    
        return view('books.edit', compact('book', 'authors')); // Pass authors to the view
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        $request->validate([
            'title' => 'required',
            'release_date' => 'required',
            'cover_path' => 'required',
            'language' => 'required',
            'summary' => 'required',
            'price' => 'required',
            'stock_saldo' => 'required',
            'pages' => 'required',
            'type' => 'required',
            'author_id' => 'required',
        ]);
    
        $book->update($request->except('author_id'));
    
        // Update the pivot table
        $book->authors()->sync($request->author_id);
    
        return redirect()->route('books.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();

        return redirect()->route('books.index');
    }
}

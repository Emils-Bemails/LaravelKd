<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index() {
        $books = Book::all();
        return view('books.index', ['books' => $books]);
    }

    public function create() {
        return view('books.create');
    }

    public function store(Request $request) {
        $book = Book::create([
            'author' => $request->input('author'),
            'title' => $request->input('title'),
        ]);

        return redirect('/books/' . $book->id);
    }

    public function show($id) {
        $book = Book::find($id);
        return view('books.show', ['singleBook' => $book]);
    }

    public function edit($id, Request $request) {
        $book = Book::find($id);
        
        return view('books.edit', ['editBook' => $book]);
    }

    public function destroy($id) {
         $book = Book::find($id);
        $book->delete();
        return redirect('/books');
    }
}

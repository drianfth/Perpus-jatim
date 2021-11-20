<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;

class BookController extends Controller
{
    //
    function home()
    {
        $books = Book::latest();


        if (request('search')) {
            $books->where('judul', 'like', '%' . request('search') . '%')
                ->orWhere('penulis', 'like', '%' . request('search') . '%');
        }
        return view('home', [
            "title" => 'Home',
            "active" => "Home",
            "search" => "true",
            "categories" => Category::all(),
            "books" => $books->get()
        ]);
    }

    function detail(Book $book)
    {
        return view('detail', [
            "title" => $book->judul,
            "active" => "Home",
            "book" => $book
        ]);
    }

    public function edit(book $book)
    {
        //
        return view('admin.book.edit', [
            'title' => 'Edit Buku ' . $book->judul,
            'categories' => Category::all(),
            'book' => $book
        ]);
        // return $book->judul;
    }
}

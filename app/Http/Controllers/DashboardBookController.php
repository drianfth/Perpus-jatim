<?php

namespace App\Http\Controllers;

use App\Models\book;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardBookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.book.index', [
            'title' => "Daftar Buku",
            'books' => book::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.book.create', [
            'title' => 'Tambah Buku',
            'categories' => Category::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $validatedData = $request->validate([
            "judul" => "required|min:5|max:255",
            "img" => "required|image|file|max:1024",
            "penulis" => "required|min:5|max:255",
            "category_id" => "required",
            "thn_terbit" => "required|max:2021",
            "jml_halaman" => "required",
            "sinopsis" => "required|min:5"
        ]);

        $validatedData['img'] = $request->file('img')->store('cover-images');

        book::create($validatedData);
        return redirect('/books')->with('success', 'Buku telah ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(book $book)
    {
        //
        return view('detail', [
            "title" => $book->judul,
            "book" => $book
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(book $book)
    {
        //
        return view('admin.book.create', [
            'title' => 'Tambah Buku',
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, book $book)
    {
        //
        $validatedData = $request->validate([
            "judul" => "required|min:5|max:255",
            "img" => "required|image|file|max:1024",
            "penulis" => "required|min:5|max:255",
            "category_id" => "required",
            "thn_terbit" => "required|max:2021",
            "jml_halaman" => "required",
            "sinopsis" => "required|min:5"
        ]);

        $validatedData['img'] = $request->file('img')->store('cover-images');


        book::where('id', $book->id)
            ->update($validatedData);


        return redirect('/books')->with('success', 'Buku berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(book $book)
    {
        //
        book::destroy($book->id);
        return redirect('/books')->with('success', 'buku berhasil dihapus');
    }
}

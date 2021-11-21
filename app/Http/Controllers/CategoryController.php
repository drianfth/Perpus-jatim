<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function index()
    {
        return view('admin.book.category', [
            "title" => "Tambah Kategori",
            "categories" => Category::all(),
        ]);
    }

    public function store(Request $request)
    {
        $ValidatedData = $request->validate([
            'name' => 'required'
        ]);

        Category::create($ValidatedData);

        // return redirect('/books')->with('success', 'Buku berhasil di update');
        return redirect('/books')->with('success', 'kategori berhasil ditambahkan');
    }
}

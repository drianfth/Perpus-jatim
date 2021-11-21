<?php

namespace App\Http\Controllers;

use App\Models\Pinjam;
use App\Models\User;
use App\Models\Book;
use App\Models\Category;
use App\Models\Lokasi;
use Illuminate\Http\Request;

class PinjamController extends Controller
{
    //
    public function index(Book $book)
    {
        // return User::first()->pinjam;
        $pinjam            = date("Y-m-d");
        $tujuh_hari        = mktime(0, 0, 0, date("n"), date("j") + 7, date("Y"));
        $kembali        = date("Y-m-d", $tujuh_hari);


        return view('pinjambuku', [
            "title" => "Pinjam Buku",
            "book" => $book,
            "lokasi" => Lokasi::all(),
            "tgl_pinjam" => $pinjam,
            "tgl_kembali" => $kembali
        ]);
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            "user_id" => "required",
            "book_id" => "required",
            "lokasi_id" => "required",
            "status" => "required",
            "tgl_pinjam" => "required",
            "tgl_kembali" => "required",
        ]);
        pinjam::create($validatedData);

        return "berhasil";
    }

    public function show()
    {
        return view('daftarpinjam', [
            "title" => "Riwayat Peminjaman",
            "pinjam" => Pinjam::latest()->get()
        ]);
    }
}

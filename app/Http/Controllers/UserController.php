<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profil()
    {
        return view('profil', [
            "title" => 'Profil',
            "active" => "Profil",
        ]);
    }

    // public function showAll()
    // {
    //     return view('admin.list', [
    //         'title' => "Daftar Anggota",
    //         'active' => 'tes',
    //         'users' => User::all()
    //     ]);
    // }
}

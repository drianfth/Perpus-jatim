<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{

    public function index()
    {
        return view('register.index', [
            "title" => 'Register',
            "active" => "Register",
        ]);
    }
    public function admin()
    {
        return view('register.admin', [
            "title" => 'Register',
            "active" => "Register",
        ]);
    }

    public function show(Request $request)
    {

        $validatedData = $request->validate([
            "nik" => "required|numeric|digits:16|unique:users",
            "name" => "required|min:5|max:255",
            "email" => "required|email:dns|unique:users",
            "password" => "required|min:5|max:255",
            "no_telp" => "required|min:5|max:255",
            "role" => "required"
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);
        return redirect('/')->with('success', 'Register Successfully');
    }
}

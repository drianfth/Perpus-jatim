<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.user.list', [
            'title' => "Daftar Anggota",
            'active' => 'tes',
            'users' => User::all()
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('admin.user.detail', [
            'title' => 'Detail Anggota',
            'active' => 'tes',
            'user' => $user,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
        $rules = [
            "name" => "required|min:5|max:255",
            "no_telp" => "required|min:5|max:255",
        ];

        if (($request->nik != $user->nik)) {
            $rules['nik'] = "required|numeric|digits:16|unique:users";
            $rules['email'] = "required|email:dns|unique:users";
        }

        $validatedData = $request->validate($rules);

        // $validatedData['password'] = bcrypt($validatedData['password']);

        // return "berhasil";

        User::where('id', $user->id)
            ->update($validatedData);
        return back()->with('success', 'Profil Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
        User::destroy($user->id);
        return redirect('/users')->with('success', 'Pengguna berhasil dihapus');
    }
}

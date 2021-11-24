<?php

namespace App\Http\Controllers;

use App\Models\Lokasi;
use App\Models\Pinjam;
use Illuminate\Http\Request;

class DashboardPerpusController extends Controller
{
    //

    public function index()
    {
        return view('dataPerpus.index', [
            "title" => "Data Perpustakaan",
            "perpus" => Lokasi::all()
        ]);
    }

    public function show(Lokasi $lokasi)
    {
        // return $lokasi->name;
        return view('dataPerpus.data', [
            "title" => $lokasi->name,
            "perpus" => $lokasi,
            "datapinjam" => Pinjam::where('lokasi_id', $lokasi->id)->get()
        ]);
    }

    public function update(Request $request, Pinjam $pinjam)
    {
        // return $pinjam->id;

        if ($request->status != $pinjam->status) {
            Pinjam::where('id', $pinjam->id)
                ->update(['status' => $request->status]);
        }

        return back()->with('success', 'Status Berhasil Dirubah');
    }
}

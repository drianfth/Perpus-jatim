@extends('layouts.main')

@section('container')
    <div class="section-header">
        <h1>Riwayat Peminjaman</h1>
    </div>

    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible show fade">
                        <div class="alert-body">
                            <button class="close" data-dismiss="alert">
                                <span>&times;</span>
                            </button>
                            {{ session('success') }}
                        </div>
                    </div>     
                @endif
                <table class="table table-hover text-center">
                    <thead class="bg-info">
                      <tr>
                        <th scope="col"  class="text-white">No</th>
                        <th scope="col"  class="text-white">Status</th>
                        <th scope="col"  class="text-white">Judul</th>
                        <th scope="col"  class="text-white">Tanggal Kembali</th>
                        <th scope="col"  class="text-white">Lokasi </th>
                        <th scope="col"  class="text-white">Cencel </th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($pinjam as $p)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            @if ($p->status === 'Pesan')
                                <td>
                                    <div class="badge badge-danger">{{ $p->status }}</div> 
                                </td> 
                            @elseif ($p->status === 'Pinjam')
                                <td>
                                    <div class="badge badge-warning">{{ $p->status }}</div> 
                                </td>
                            @else
                                <td>
                                    <div class="badge badge-success">{{ $p->status }}</div> 
                                </td>
                            @endif
                            <td>{{ $p->book->judul }}</td>
                            <td>{{ $p->tgl_kembali }}</td>
                            <td>{{ $p->lokasi->name }}</td>
                            <td>
                                <form action="/riwayat/{{ $p->id }}" method="POST" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('are you sure?')"><i class="far fa-times-circle"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
@endsection
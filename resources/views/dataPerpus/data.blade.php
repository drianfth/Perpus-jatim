@extends('layouts.main')

@section('container')
<div class="section-header">
    <h1>Data Peminjaman Buku</h1>
  </div>

  <div class="section-body">
    <div class="card">
      <div class="card-header d-flex justify-content-center">
        <h4>Data Peminjaman Buku {{ $perpus->name }}</h4>
      </div>
      <div class="card-body table-responsive">
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
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">No.</th>
              <th scope="col">NIK</th>
              <th scope="col">Nama Member</th>
              <th scope="col">Judul Buku</th>
              <th scope="col">Status</th>
              <th scope="col">Perbarui Data</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($datapinjam as $data)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                      <td>{{ $data->user->nik }}</td>
                      <td>{{ $data->user->name }}</td>
                      <td>{{ $data->book->judul }}</td>
                      <td>
                        <form action="/perpustakaan/edit/{{ $data->id }}" method="POST">
                        @method('put')
                        @csrf
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" value="Pesan" id="status1-{{ $data->id }}" name="status" class="custom-control-input" {{ ($data->status === "Pesan") ? "checked" : '' }}>
                            <label class="custom-control-label" for="status1-{{ $data->id }}">Pesan</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" value="Pinjam" id="status2-{{ $data->id }}" name="status" class="custom-control-input" {{ ($data->status === "Pinjam") ? "checked" : '' }}>
                            <label class="custom-control-label" for="status2-{{ $data->id }}">Pinjam</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="status3-{{ $data->id }}" value="Selesai" name="status" class="custom-control-input" {{ ($data->status === "Selesai") ? "checked" : '' }}>
                            <label class="custom-control-label" for="status3-{{ $data->id }}">Selesai</label>
                        </div>
                        </td>
                      <td>
                        <button type="submit" class="btn btn-sm btn-primary"><i class="fas fa-check"></i></button>
                        </form>
                      </td>
                    
                </tr> 
            @endforeach
            {{-- @foreach ($datapinjam as $data)
            <tr>
              <th scope="row">1</th>
              <td>Mark Subagjo</td>
              <td>1000 Jalan Menuju Tuban</td>
              <form action="" method="POST">
                <td>
                  <!-- pada id, for, dan name, keyoord "id01" nilainya ambil dari id setiap data-->
                  <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="status1-id01" name="statusData-id01" class="custom-control-input">
                    <label class="custom-control-label" for="status1-id01">Pesan</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="status2-id01" name="statusData-id01" class="custom-control-input">
                    <label class="custom-control-label" for="status2-id01">Pinjam</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="status3-id01" name="statusData-id01" class="custom-control-input">
                    <label class="custom-control-label" for="status3-id01">Selesai</label>
                  </div>
                </td>
                <td>
                  <button type="submit" class="btn btn-sm btn-primary"><i class="fas fa-check"></i></button>
                </td>
              </form>
            </tr> 
            @endforeach --}}


          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
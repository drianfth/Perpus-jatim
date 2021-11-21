@extends('layouts.main')

@section('container')
<div class="section-header">
    <h1>Pinjam Buku</h1>
  </div>

  <div class="section-body">
    <div class="row d-flex justify-content-center">
      <div class="col-12 col-md-7">
        <div class="card">
          <form action="/pinjam" method="POST">
            @csrf
            <div class="card-header">
              <h4>Konfirmasi Peminjaman Buku</h4>
            </div>
            <div class="card-body">
              <div class="d-flex justify-content-center mb-4">
                <img src="../assets/img/buku/kbsk.jpg" alt="" class="img-thumbnail" style="max-width: 200px;">
              </div>
              <fieldset disabled>
                <div class="form-group">
                  <label>Judul Buku</label>
                  <input type="text" class="form-control" value="{{ $book->judul }}">
                </div>
                <div class="form-group">
                  <label>Penulis</label>
                  <input type="text" class="form-control" value="{{ $book->penulis }}">
                </div>
              </fieldset>

              {{-- <div class="form-group">
                <label>Tanggal Pinjam</label>
                <input type="date" class="form-control datepicker" required name="tgl_pinjam" value="{{ $tgl_kembali }}">
              </div> --}}
              <input type="hidden" value="{{ auth()->user()->id }}" name="user_id">
              <input type="hidden" value="{{ $book->id }}" name="book_id">
              <div class="form-group">
                <label>Perpustakaan</label>
                <select class="form-control select2" name="lokasi_id" required>
                  <option value="">Pilih Perpustakaan</option>                   
                  @foreach ($lokasi as $lok)
                    <option value="{{ $lok->id }}">{{ $lok->name }}</option>                   
                  @endforeach
                </select>
              </div>
              <input type="hidden" value="dipesan" name="status">
              <input type="hidden" value="{{ $tgl_pinjam }}" name="tgl_pinjam">
              <input type="hidden" value="{{ $tgl_kembali }}" name="tgl_kembali">
            </div>
            
            <div class="card-footer">
                <div class="text-right">
                    <button class="btn btn-primary">Submit</button>
                </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
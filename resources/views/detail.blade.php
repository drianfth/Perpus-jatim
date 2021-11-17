@extends('layouts.main')
{{-- @dd($book->img) --}}
@section('container')

<div class="row">
    <div class="col-lg-12">
        <div class="card">
          <div class="card-header">
            <h4>Detail Buku</h4>
          </div>
        </div>
    </div>
</div>
<div class="row justify-content-center ">
    <div class="col-md-10 ">
        <div class="card ">
          <div class="card-header">
            <div class="">
              <h2>{{ $book->judul }}</h2>
              <span>Added {{ $book->created_at->diffForHumans() }}</span>
            </div>
          </div>
          <div class="card-body">
            <div class="text-center mb-5">
              <img src="../img/{{ $book->img }}" alt="" class="img-thumbnail" width="300px">
            </div>
            <ul style="list-style-type:none;">
              <li style="font-size: 18px"><span class="font-weight-bold">Judul : </span> {{ $book->judul }}</li>
              <li style="font-size: 18px"><span class="font-weight-bold">Penulis : </span>{{ $book->penulis }}</li>
              <li style="font-size: 18px"><span class="font-weight-bold">Tahun Terbit : </span>{{ $book->thn_terbit }}</li>
              <li style="font-size: 18px"><span class="font-weight-bold">Jumlah Halaman : </span>{{ $book->jml_halaman }}</li>
              <li style="font-size: 18px"><span class="font-weight-bold">Sinopsis : </span><br>{!! $book->sinopsis !!}</li>
              @if (auth()->user()->role === 'user')
                <li><a href="#" class="btn btn-primary mt-4"  style="font-size: 15px">Pinjam</a></li>
              @else
                <li><a href="/books" class="btn btn-primary mt-4"  style="font-size: 15px"><i class="fas fa-arrow-left"></i> Back</a></li>
              @endif
            </ul>
          </div>
        </div>
    </div>
</div>


    
@endsection
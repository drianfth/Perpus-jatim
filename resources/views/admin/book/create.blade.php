@extends('layouts.main')

@section('container')

<div class="section-header">
    <h1>Tambah Buku</h1>
</div>

<div class="row justify-content-center">
    <div class="col-lg-11">
        <div class="card">
            <div class="card-body">
                <form action="/books" method="POST">
                    @csrf
                    <input type="hidden" name="img" value="Laskar Pelangi.jpg">
                    <div class="form-group">
                        <label for="judul">Judul Buku</label>
                        <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" placeholder="Judul Buku" name="judul" autofocus>
                        @error('judul')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="penulis">Penulis</label>
                        <input type="text" class="form-control @error('penulis') is-invalid @enderror" id="penulis" placeholder="penulis" name="penulis">
                        @error('judul')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Category</label>
                        <select class="form-control @error('category_id') is-invalid @enderror" name="category_id">
                            <option value="">Pilih kategori</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('category_id')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>                
                        @enderror
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="thn_terbit">Tahun Terbit</label>
                            <input type="number" class="form-control @error('thn_terbit') is-invalid @enderror" id="thn_terbit" placeholder="2000" name="thn_terbit">
                            @error('thn_terbit')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="jml_halaman">Jumlah Halaman</label>
                            <input type="number" class="form-control @error('jml_halaman') is-invalid @enderror" id="jml_halaman" name="jml_halaman">
                            @error('jml_halaman')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-5">
                        <label for="sinopsis" class="form-label"><strong>Sinopsis</strong></label>
                        <input id="sinopsis" type="hidden" name="sinopsis">
                        <trix-editor input="sinopsis"></trix-editor>
                        @error('sinopsis')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>  
                        @enderror
                    </div>
                    <a href="/books" class="btn btn-success"><i class="fas fa-arrow-left"></i> back</a>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>      
            </div>
            <div class="card-footer">

            </div>
        </div>
    </div>
</div>
@endsection
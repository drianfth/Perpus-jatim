@extends('layouts.main')

@section('container')
    <div class="section-header">
        <h1>Tambah kategori</h1>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-11">
            <div class="card">
                <div class="card-body">

                    <div class="row justify-content-center">
                        <div class="col-lg-11">
                            <form action="/category" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="judul">Nama Kategori</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="nama kategori" name="name" autofocus>
                                    @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <a href="/books" class="btn btn-success"><i class="fas fa-arrow-left"></i> back</a>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>      

                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
@endsection
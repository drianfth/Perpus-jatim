@extends('layouts.main')

@section('container')
    <div class="section-header">
        <h1>Daftar Buku Perpustakaan</h1>
    </div>

    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                
                {{-- <h4 class="">List Buku</h4> --}}
                <a href="/books/create" class="btn btn-success mr-3"><i class="fas fa-plus"></i> Add Book  </a>
                <a href="/category" class="btn btn-warning"><i class="fas fa-plus"></i> Add Category</a>
            </div>
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
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($books as $book)
                        <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $book->judul }}</td>
                        <td>{{ $book->category->name }}</td>
                        <td>
                            <a href="/books/{{ $book->id }}" class="btn btn-info"><i class="far fa-eye"></i></a>
                            <a href="#" class="btn btn-warning"><i class="far fa-edit"></i></a>
                            <form action="/books/{{ $book->id }}" method="POST" class="d-inline">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger"><i class="fas fa-trash" onclick="return confirm('are you sure?')"></i></button>
                            </form>

                        </td>
                        </tr
                    @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
@endsection
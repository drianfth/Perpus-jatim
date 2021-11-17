@extends('layouts.main')

@section('container')
    <div class="section-header">
        <h1>Daftar Buku Perpustakaan</h1>
    </div>

    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                
                {{-- <h4 class="">List Buku</h4> --}}
                <a href="/books/create" class="btn btn-success"><i class="fas fa-plus"></i> Add Book</a>
            </div>
            <div class="card-body">
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
                            <a href="#" class="btn btn-warning"><i class="far fa-edit"></i></i></a>
                            <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                        </td>
                        </tr
                    @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
@endsection
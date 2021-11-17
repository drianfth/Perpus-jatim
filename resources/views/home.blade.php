@extends('layouts.main')
{{-- @dd(request('search')) --}}
@section('container')
    <div class="section-header">
        <h1>Rak Buku</h1>
    </div>

    <div class="section-body">
        <div class="card">
        <div class="card-body">
            @if ($books->isNotEmpty())
                @if (request('search'))
                    @foreach ($books as $book)
                    <h3 class="judul-kategori mb-2">{{ $book->category->name }}</h3>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 buku buku-perpus mb-4">
                        <div class="row list-buku">
                            <a href="/detail/ {{ $book->id }}" class="text-decoration-none">
                                <img src="img/{{ $book->img }}" alt="" class="img-thumbnail">
                                <p class="text-center">{{ $book->judul }}</p>
                            </a>
                        </div>
                    </div>
                    {{-- <p>{{ $books->count() }}</p> --}}
                        
                    @endforeach
                @else
                    @foreach ($categories as $category)
                        <h3 class="judul-kategori mb-2">{{ $category->name }}</h3>
                        <div class="row list-buku">
                            @foreach ($books->where('category_id',$category->id) as $book)
                                <div class="col-6 col-sm-4 col-md-3 col-lg-2 buku buku-perpus mb-4">
                                    <a href="/detail/ {{ $book->id }}" class="text-decoration-none">
                                        <img src="img/{{ $book->img }}" alt="" class="img-thumbnail">
                                        <p class="text-center">{{ $book->judul }}</p>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    @endforeach
                @endif
            @else
                <h3>Book not found</h3>
            @endif
            

        </div>
    </div>
@endsection
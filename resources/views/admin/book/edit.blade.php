@extends('layouts.main')

@section('container')

<div class="section-header">
    <h1>Edit Buku {{ $book->judul }}</h1>
</div>

<div class="row justify-content-center">
    <div class="col-lg-11">
        <div class="card">
            <div class="card-body">
                <form action="/books/{{ $book->id }}" method="POST" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <input type="hidden" name="oldImage" value="{{ $book->img }}">
                    <div class="form-group">
                        <label for="judul">Judul Buku</label>
                        <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" placeholder="Judul Buku" name="judul" value="{{ old('judul', $book->judul) }}" autofocus>
                        @error('judul')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="penulis">Penulis</label>
                        <input type="text" class="form-control @error('penulis') is-invalid @enderror" id="penulis" placeholder="penulis" name="penulis" value="{{ old('penulis', $book->penulis) }}">
                        @error('penulis')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Category</label>
                        <select class="form-control @error('category_id') is-invalid @enderror" name="category_id">
                            @foreach ($categories as $category)
                                @if (old('category_id', $book->category->id) == $category->id)
                                    <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                @else
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endif
                            @endforeach
                        </select>
                        @error('category_id')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>                
                        @enderror
                    </div>
                    <label class="mb-2"><strong> Upload Cover Buku</strong></label>
					<img class="img-preview img-fluid mb-3 " width="150px" >
                    <div class="custom-file mb-2">
                        <input type="file" class="custom-file-input @error('img') is-invalid @enderror" id="img" name="img" onchange="previewImage()">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                        @error('img')
                                <div class="invalid-feedback mt-2">
                                    {{ $message }}
                                </div>
                        @enderror
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="thn_terbit">Tahun Terbit</label>
                            <input type="number" class="form-control @error('thn_terbit') is-invalid @enderror" id="thn_terbit" placeholder="2000" name="thn_terbit" value="{{ old('thn_terbit',$book->thn_terbit) }}">
                            @error('thn_terbit')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="jml_halaman">Jumlah Halaman</label>
                            <input type="number" class="form-control @error('jml_halaman') is-invalid @enderror" id="jml_halaman" name="jml_halaman" value="{{ old('jml_halaman', $book->jml_halaman) }}">
                            @error('jml_halaman')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-5">
                        <label for="sinopsis" class="form-label"><strong>Sinopsis</strong></label>
                        <input id="sinopsis" type="hidden" name="sinopsis" value="{{ old('sinopsis', $book->sinopsis) }}">
                        <trix-editor input="sinopsis"></trix-editor>
                        @error('sinopsis')
                          <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <a href="/books" class="btn btn-success"><i class="fas fa-arrow-left"></i> back</a>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>      
            </div>
            <div class="card-footer">

            </div>
        </div>
    </div>
</div>
<script>
	function previewImage(){
		const image = document.querySelector('#img');
		const imgPreview = document.querySelector('.img-preview');

		imgPreview.style.display = 'block';

		const oFReader = new FileReader();
		oFReader.readAsDataURL(img.files[0]);

		oFReader.onload = function(oFREvent){
			imgPreview.src = oFREvent.target.result;
		}
	}
</script>
@endsection
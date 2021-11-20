@extends('layouts.main')

@section('container')

<div class="section-header">
    <h1>Edit Profil</h1>
</div>

<div class="row justify-content-center">
    <div class="col-lg-11">
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
                <form action="/users/{{ $user->id }}" method="POST">
                    @method('put')
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nik">NIK</label>
                            <input type="number" class="form-control @error('nik') is-invalid @enderror" id="nik" placeholder="NIK " name="nik" value="{{ old('nik', $user->nik) }}" autofocus>
                            @error('nik')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email', $user->email) }}">
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name">Nama Lengkap</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Nama Lengkap" name="name" value="{{ old('name', $user->name) }}" id="name">
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="no_telp">No Telepon</label>
                            <input type="number" class="form-control @error('no_telp') is-invalid @enderror" id="no_telp" name="no_telp" value="{{ old('no_telp', $user->no_telp) }}">
                            @error('no_telp')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>


                    
                    <a href="/profil" class="btn btn-success"><i class="fas fa-arrow-left"></i> back</a>
                    <button type="submit" class="btn btn-primary">Edit</button>
                </form>      
            </div>
            <div class="card-footer">

            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function myFunction() {
        var show = document.getElementById('password');
        if (show.type=='password') {
            show.type = 'text';
        }else{
            show.type = 'password';
        }
    }

</script>
@endsection
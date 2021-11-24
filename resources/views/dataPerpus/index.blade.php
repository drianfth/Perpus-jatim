@extends('layouts.main')

@section('container')
<div class="section-header">
    <h1>Daftar Perpustakaan</h1>
</div>
    <div class="perpus">
        <div class="row justify-content-center">
            @foreach ($perpus as $perpustakaan)
                <div class="col-lg-5">
                    <a href="/perpustakaan/{{ $perpustakaan->id }}" class="text-decoration-none ">
                        <div class="card bg-info text-center perpustakaan">
                            <div class="card-body">
                                <img src="/img/library.png" alt="" width="220">
                                <p style="font-size: 18px"> <strong>{{ $perpustakaan->name }}</strong></p>
                            </div>
                        </div>
                    </a>    
                </div>
            @endforeach
        </div>
    </div>  
@endsection
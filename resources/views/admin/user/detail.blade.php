@extends('layouts.main')
{{-- @dd($book->img) --}}
@section('container')

<div class="section-header">
  <h5 class="m-0">Detail Informasi Anggota</h5>
</div>

<div class="section-body">
  <div class="row justify-content-center ">
      <div class="col-12 col-sm-9 col-md-6 col-lg-5 ">
          <div class="card ">
            <div class="card-header">
              <h4 style="font-size: 18px">{{ $user->name }}</h4>
              <div class="card-header-action" style="width: auto">
                @if ($user->role === 'admin')
                  <span class="badge badge-info">{{ $user->role }}</span>
                @else
                  <span class="badge badge-success">{{ $user->role }}</span>
                @endif
              </div>
            </div>
            <div class="card-body">
              <div class="text-center mb-5">
                <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle author-box-picture" style="max-width: 150px">
              </div>

              <div>
                <p style="font-size: 18px"><span class="font-weight-bold">Nama Lengkap : </span> {{ $user->name }}</p>
                <p style="font-size: 18px"><span class="font-weight-bold">NIK : </span>{{ $user->nik }}</p>
                <p style="font-size: 18px"><span class="font-weight-bold">Email : </span>{{ $user->email }}</p>
                <p style="font-size: 18px"><span class="font-weight-bold">Nomor Telepon : </span>{{ $user->no_telp }}</p>
              </div>
  
              <a href="/users" class="btn btn-primary mt-4"  style="font-size: 15px"><i class="fas fa-arrow-left"></i> Back</a>
            </div>
          </div>
      </div>
  </div>
</div>

@endsection
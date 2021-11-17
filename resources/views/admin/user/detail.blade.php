@extends('layouts.main')
{{-- @dd($book->img) --}}
@section('container')

<div class="row">
    <div class="col-lg-12">
        <div class="card">
          <div class="card-header">
            <h4>Informasi Anggota</h4>
          </div>
        </div>
    </div>
</div>
<div class="row justify-content-center ">
    <div class="col-md-10 ">
        <div class="card ">
          <div class="card-header">
            <div class="">
              <h3>{{ $user->name }}</h3>
            </div>
          </div>
          <div class="card-body">
            <div class="text-center mb-2">
              <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle author-box-picture" width="200px">
            </div>

            <div class="text-center mb-4">
              @if ($user->role === 'admin')
                <span class="badge badge-info" style="font-size: 18px">{{ $user->role }}</span>
              @else
                <span class="badge badge-success" style="font-size: 18px">{{ $user->role }}</span>
              @endif
            </div>


            <ul style="list-style-type:none;">
              <li style="font-size: 18px"><span class="font-weight-bold">Nama Lengkap : </span> {{ $user->name }}</li>
              <li style="font-size: 18px"><span class="font-weight-bold">NIK : </span>{{ $user->nik }}</li>
              <li style="font-size: 18px"><span class="font-weight-bold">Email : </span>{{ $user->email }}</li>
              <li style="font-size: 18px"><span class="font-weight-bold">Nomer Telepon : </span>{{ $user->no_telp }}</li>

              <li><a href="/users" class="btn btn-primary mt-4"  style="font-size: 15px"><i class="fas fa-arrow-left"></i> Back</a></li>
            </ul>
          </div>
        </div>
    </div>
</div>


    
@endsection
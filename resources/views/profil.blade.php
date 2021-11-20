@extends('layouts.main')

@section('container')

<div class="section-header">
    <h1>User Profil</h1>
</div>
<div class="row d-flex justify-content-center mt-4">
    <div class="col-12 col-sm-10 col-md-7 col-lg-6">
        <div class="card author-box card-primary">
            <div class="card-body">
              <div class="author-box-left">
                <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle author-box-picture mb-3">
                <div class="author-box-name">
                  <a href="#">{{ auth()->user()->name }}</a>
                  <div class="clearfix"></div>
                  @if (auth()->user()->role === 'admin')
                    <span class="badge badge-info text-center">{{ auth()->user()->role }}</span>
                  @else
                    <span class="badge badge-success text-center">{{ auth()->user()->role }}</span>
                  @endif
                </div>
              </div>
              <div class="author-box-details pl-sm-3">
                <div class="author-box-description text-left">
                  <p class="mb-0"><span class="font-weight-bold">Nama Lengkap : </span> {{ auth()->user()->name }}</p>
                  <p class="mb-0"><span class="font-weight-bold">NIK : </span>{{ auth()->user()->nik }}</p>
                  <p class="mb-0"><span class="font-weight-bold">Email : </span>{{ auth()->user()->email }}</p>
                  <p class="mb-0"><span class="font-weight-bold">Nomer Telepon : </span>{{ auth()->user()->no_telp }}</p>
                </div>
              </div>
              <div class="d-flex justify-content-center justify-content-sm-end mt-3">
                <a href="#" class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i> Edit</a>
              </div>
            </div>
          </div>
    </div>
</div>
@endsection
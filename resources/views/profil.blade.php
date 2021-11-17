@extends('layouts.main')

@section('container')

<div class="section-header">
    <h1>User Profil</h1>
</div>

<div class="row">
    <div class="col-12 col-sm-12 col-lg-7">
        <div class="card author-box card-primary">
            <div class="card-body">
              <div class="author-box-left">
                <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle author-box-picture">
                <div class="clearfix"></div>
                <a href="#" class="btn btn-primary mt-3 follow-btn" data-follow-action="alert('follow clicked');" data-unfollow-action="alert('unfollow clicked');">Edit</a>
              </div>
              <div class="author-box-details">
                <div class="author-box-name">
                  <a href="#">{{ auth()->user()->name }}</a>
                </div>
                @if (auth()->user()->role === 'admin')
                  <span class="badge badge-info">{{ auth()->user()->role }}</span>
                @else
                  <span class="badge badge-success">{{ auth()->user()->role }}</span>
                @endif
                {{-- <div class="author-box-job">{{ auth()->user()->role }}</div> --}}
                <div class="author-box-description">
                    <ul style="list-style-type:none;">
                        <li style="font-size: 15px"><span class="font-weight-bold">Nama Lengkap : </span> {{ auth()->user()->name }}</li>
                        <li style="font-size: 15px"><span class="font-weight-bold">NIK : </span>{{ auth()->user()->nik }}</li>
                        <li style="font-size: 15px"><span class="font-weight-bold">Email : </span>{{ auth()->user()->email }}</li>
                        <li style="font-size: 15px"><span class="font-weight-bold">Nomer Telepon : </span>{{ auth()->user()->no_telp }}</li>
                    </ul>
                </div>
              </div>
            </div>
          </div>
    </div>
</div>
@endsection
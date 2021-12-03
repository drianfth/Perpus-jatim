@extends('layouts.main')

@section('container')
    <div class="section-header">
        <h1>Daftar Anggota Perpustakaan</h1>
    </div>

    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                
                <h4 class="">List Anggota</h4>
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
                        <th scope="col">Nama</th>
                        
                        <th scope="col">Role</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($users as $user)
                        <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $user->name }}</td>
                        
                        <td>
                          @if ($user->role === 'admin')
                            <span class="badge badge-info">{{ $user->role }}</span>
                          @else
                            <span class="badge badge-success">{{ $user->role }}</span>
                          @endif
                        </td>
                        <td>
                            <a href="/users/{{ $user->id }}" class="btn btn-sm btn-info"><i class="far fa-eye"></i></a>
                            <form action="/users/{{ $user->id }}" method="POST" class="d-inline">
                              @method('delete')
                              @csrf
                              <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash" onclick="return confirm('are you sure?')"></i></button>
                            </form>

                            {{-- <a href="#" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a> --}}
                        </td>
                        </tr
                    @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
@endsection
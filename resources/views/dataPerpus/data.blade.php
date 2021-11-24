@extends('layouts.main')

@section('container')
<div class="section-header">
    <h1>Data Peminjaman Buku</h1>
  </div>

  <div class="section-body">
    <div class="card">
      <div class="card-header d-flex justify-content-center">
        <h4>Data Peminjaman Buku {{ $perpus->name }}</h4>
      </div>
      <div class="card-body table-responsive">
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">No.</th>
              <th scope="col">Nama Member</th>
              <th scope="col">Judul Buku</th>
              <th scope="col">Status</th>
              <th scope="col">Perbarui Data</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($datapinjam as $data)
                <tr>
                    <th scope="row">1</th>
                    <td>Mark Subagjo</td>
                    <td>1000 Jalan Menuju Tuban</td>
                    <form action="" method="POST">
                        <td>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" value="Pesan" id="status1-id01" name="statusData-id01" class="custom-control-input" {{ ($data->status === "Pesan") ? "checked" : '' }}>
                            <label class="custom-control-label" for="status1-id01">Pesan</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" value="Pinjam" id="status2-id01" name="statusData-id01" class="custom-control-input" {{ ($data->status === "Pinjam") ? "checked" : '' }}>
                            <label class="custom-control-label" for="status2-id01">Pinjam</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="status3-id01" name="statusData-id01" class="custom-control-input">
                            <label class="custom-control-label" for="status3-id01">Selesai</label>
                        </div>
                        </td>
                        <td>
                        <button type="submit" class="btn btn-sm btn-primary"><i class="fas fa-check"></i></button>
                        </td>
                    </form>
                </tr>

                
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
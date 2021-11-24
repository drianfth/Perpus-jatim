@extends('layouts.main')

@section('container')
  <div class="section-header">
    <h1>Petunjuk</h1>
  </div>

  <div class="section-body">
    <h2 class="section-title">Panduan meminjam, mengambil, serta mengembalikan buku</h2>
    <p class="section-lead">
      Tekan tombol "+" untuk melihat detail setiap petunjuk.
    </p>
    <div class="row mt-4">
      <div class="col">
        <div class="card">
          <div class="card-header">
            <h4>Cara Meminjam Buku</h4>
            <div class="card-header-action">
              <a data-collapse="#cara-pinjam" class="btn btn-icon btn-info" href="#"><i
                  class="fas fa-plus"></i></a>
            </div>
          </div>
          <div class="collapse hide" id="cara-pinjam">
            <div class="card-body">
              <ol>
                <li>Di halaman <a href="/books">Rak Buku</a>, anda dapat melihat semua buku yang tersedia. Untuk
                  mencari judul buku yang Anda cari, Anda dapat mengetikkan kata kuncinya pada kolom pencarian.
                </li>
                <li>Klik pada salah satu koleksi buku untuk melihat detail buku.</li>
                <li>Jika anda memutuskan untuk meminjam buku tersebut, klik tombol pinjam yang ada pada bagian
                  bawah halaman detail buku.</li>
                <li>Pilih lokasi perpustakaan sebagai tempat anda meminjam buku tersebut.</li>
                <li>Klik submit untuk mengonfirmasi peminjaman buku.</li>
                <li>Sekarang buku yang Anda inginkan sudah masuk ke daftar peminjaman (dengan status "Dipesan").
                  Ikuti petunjuk selanjutnya untuk melakukan pengambilan buku di perpustakaan.</li>
              </ol>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header">
            <h4>Cara Mengambil Buku</h4>
            <div class="card-header-action">
              <a data-collapse="#cara-ambil" class="btn btn-icon btn-info" href="#"><i
                  class="fas fa-plus"></i></a>
            </div>
          </div>
          <div class="collapse hide" id="cara-ambil">
            <div class="card-body">
              <ol>
                <li>Datangi lokasi perpustakaan yang telah anda pilih sebelumnya.</li>
                <li>Pergi ke admin perpustakaan, lalu tunjukkan nomor id (NIK) Anda untuk melihat daftar buku
                  yang telah anda pesan.</li>
                <li>Admin perpustakaan akan memberikan buku yang akan anda pinjam.</li>
                <li>Selamat membaca! Jangan lupa untuk mengembalikan buku sesuai tanggal kembalinya, ya.</li>
                <li>Catatan: Tanggal pengembalian dapat dilihat pada halaman <a href="#">Daftar Peminjaman</a>
                  (H+7 sejak submit form pinjam buku)</li>
              </ol>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header">
            <h4>Cara Mengembalikan Buku</h4>
            <div class="card-header-action">
              <a data-collapse="#cara-kembali" class="btn btn-icon btn-info" href="#"><i
                  class="fas fa-plus"></i></a>
            </div>
          </div>
          <div class="collapse hide" id="cara-kembali">
            <div class="card-body">
              <ol>
                <li>Datangi kembali lokasi perpustakaan tempat Anda meminjam buku.</li>
                <li>Pergi ke admin perpustakaan, lalu tunjukkan nomor id (NIK) Anda untuk melakukan konfirmasi
                  pengembalian buku pada akun anda.</li>
                <li>Serahkan buku yang ingin Anda kembalikan.</li>
                <li>Selesai. Status buku yang anda pinjam sebelumnya sekarang sudah berubah menjadi "Sudah
                  dikembalikan".</li>
              </ol>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header">
            <h4>Petunjuk Tambahan</h4>
            <div class="card-header-action">
              <a data-collapse="#petunjuk-tambahan" class="btn btn-icon btn-info" href="#"><i
                  class="fas fa-plus"></i></a>
            </div>
          </div>
          <div class="collapse hide" id="petunjuk-tambahan">
            <div class="card-body">
              <ul>
                <li>Jika Anda ingin melihat riwayat atau status peminjaman buku anda secara lengkap, Anda dapat
                  melihatnya pada halaman <a href="#">Daftar Peminjaman</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
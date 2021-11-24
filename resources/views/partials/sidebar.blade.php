<div class="main-sidebar">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="index.html">Perpus Jatim</a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="index.html">PO</a>
      </div>
      <ul class="sidebar-menu">
        <li class="menu-header">Home</li>
        @if (auth()->user()->role === 'user')
          <li class="{{ (Request::is('home') || Request::is('detail*')) ? 'active' : ''}}"><a class="nav-link " href="/home"><i class="fas fa-book"></i>
              <span>Rak Buku</span></a>
          </li>
        @else
          <li class="{{ (Request::is('books*') || (Request::is('buku*'))) ? 'active' : '' }}"><a class="nav-link" href="/books"><i class="fas fa-book"></i>
            <span>Daftar Buku</span></a>
          </li>
        @endif
        <li class="menu-header">User Menu</li>
        <li class="{{ Request::is('profil*') ? 'active' : '' }}">
          <a class="nav-link" href="/profil"><i class="fas fa-user"></i> <span>Profil</span></a>
        </li>

        @if (auth()->user()->role === 'admin')
          <li class="{{ Request::is('users*') ? 'active' : '' }}">
            <a class="nav-link" href="/users"><i class="fas fa-users"></i> <span>Daftar Anggota</span></a>
          </li>
        @endif

        @if (auth()->user()->role === 'admin')
          <li class="{{ Request::is('perpustakaan*') ? 'active' : '' }}">
            <a class="nav-link" href="/perpustakaan"><i class="fas fa-database"></i> <span>Data Peminjaman</span></a>
          </li>
        @else
          <li class="{{ Request::is('riwayat*') ? 'active' : '' }}">
            <a class="nav-link" href="/riwayat"><i class="fas fa-history"></i> <span>Riwayat Peminjaman</span></a>
          </li>
        @endif

        @if (auth()->user()->role === 'user')
          <li class="{{ Request::is('petunjuk') ? "active" : ""}}">
            <a class="nav-link" href="/petunjuk"><i class="fas fa-lightbulb"></i> <span>Petunjuk</span></a>
          </li>
        @endif
      </ul>


    </aside>
  </div>
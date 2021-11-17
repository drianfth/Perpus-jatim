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
          <li class=""><a class="nav-link" href="/home"><i class="fas fa-book"></i>
              <span>Rak Buku</span></a>
          </li>
        @else
          <li class="{{ Request::is('books*') ? 'active' : '' }}"><a class="nav-link" href="/books"><i class="fas fa-book"></i>
            <span>Daftar Buku</span></a>
          </li>
        @endif
        <li class="menu-header">User Menu</li>
        <li class="{{ Request::is('profil') ? 'active' : '' }}">
          <a class="nav-link" href="/profil"><i class="fas fa-user"></i> <span>Profil</span></a>
        </li>

        @if (auth()->user()->role === 'admin')
          <li class="{{ Request::is('users*') ? 'active' : '' }}">
            <a class="nav-link" href="/users"><i class="fas fa-users"></i> <span>Daftar Anggota</span></a>
          </li>
        @endif

        <li class="">
          <a class="nav-link" href="/pinjam"><i class="fas fa-file-alt"></i> <span>Daftar Peminjaman</span></a>
        </li>

        @if (auth()->user()->role === 'user')
          <li>
            <a class="nav-link" href=""><i class="fas fa-lightbulb"></i> <span>Petunjuk</span></a>
          </li>
        @endif
      </ul>


    </aside>
  </div>
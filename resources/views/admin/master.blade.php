<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>SMK LPPM RI BANDUNG</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/css/components.css">
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
          <div class="search-element">
            {{--  --}}
          </div>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block">Hi, {{ Auth::user()->name  }}</div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <a href="/profil" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile
              </a>
              <div class="dropdown-divider"></div>
              <a href="{{ route('logout') }}"
              onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> {{ __('Logout') }}
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="/main">SMK LPPM RI BANDUNG</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="/main">SLRB</a>
          </div>
          <ul class="sidebar-menu">
              <li class="menu-header">Menu</li>
                <li class="{{ (request()->is('main') ? 'active' : '') }}">
                  <a class="nav-link" href="/main"><i class="fas fa-fire"></i> 
                    <span>Dashboard</span></a>
                  </li>
                <li class="nav-item dropdown {{ (request()->is('artikel') ? 'active' : '') }} {{ (request()->is('tambah-artikel') ? 'active' : '') }}">
                  <a class="nav-link has-dropdown" href=""><i class="far fa-file-alt"></i> 
                    <span>Artikel</span></a>
                    <ul class="dropdown-menu">
                      <li class="{{ (request()->is('artikel') ? 'active' : '') }}"><a class="nav-link" href="/artikel">List Artikel</a></li>
                      <li class="{{ (request()->is('tambah-artikel') ? 'active' : '') }}"><a class="nav-link" href="/tambah-artikel">Tambah Artikel</a></li>
                    </ul>
                  </li>
                <li class="{{ (request()->is('tags') ? 'active' : '') }} {{ (request()->is('tambah-tags') ? 'active' : '') }}">
                  <a class="nav-link has-dropdown" href=""><i class="fas fa-tags"></i> 
                    <span>Tags</span></a>
                    <ul class="dropdown-menu">
                      <li class="{{ (request()->is('tags') ? 'active' : '') }}">
                        <a class="nav-link" href="/tags">List Tags</a>
                      </li>
                      <li class="{{ (request()->is('tambah-tags') ? 'active' : '') }}">
                        <a class="nav-link" href="/tambah-tags">Tambah Tags</a>
                      </li>
                    </ul>
                  </li>

                  <li class="{{ (request()->is('admin') ? 'active' : '') }} {{ (request()->is('tambah-admin') ? 'active' : '') }}">
                    <a class="nav-link has-dropdown" href=""><i class="fas fa-user-cog"></i> 
                      <span>Admin</span></a>
                      <ul class="dropdown-menu">
                        <li class="{{ (request()->is('admin') ? 'active' : '') }}">
                          <a class="nav-link" href="/admin">List Admin</a>
                        </li>
                        <li class="{{ (request()->is('tambah-admin') ? 'active' : '') }}">
                          <a class="nav-link" href="/tambah-admin">Tambah Admin</a>
                        </li>
                      </ul>
                    </li>

              <li class="menu-header">Galeri</li>
                <li class="{{ (request()->is('foto') ? 'active' : '') }} {{ (request()->is('tambah-foto') ? 'active' : '') }}">
                  <a class="nav-link has-dropdown" href="/foto"><i class="far fa-images"></i></i> 
                    <span>Foto</span></a>
                    <ul class="dropdown-menu">
                      <li class="{{ (request()->is('foto') ? 'active' : '') }}">
                        <a class="nav-link" href="/foto">List Foto</a>
                      </li>
                      <li class="{{ (request()->is('tambah-foto') ? 'active' : '') }}">
                        <a class="nav-link" href="/tambah-foto">Tambah Foto</a>
                      </li>
                    </ul>
                  </li>
                <li class="{{ (request()->is('video') ? 'active' : '') }}">
                  <a class="nav-link" href="/video"><i class="fas fa-video"></i></i> 
                    <span>Video</span></a>
                  </li>
        </aside>
      </div>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          @yield('main')
          <div class="section-body">
          </div>
        </section>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          SMK LPPM RI BANDUNG
        </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="../assets/js/stisla.js"></script>

  <!-- JS Libraies -->

  <!-- Template JS File -->
  <script src="../assets/js/scripts.js"></script>
  <script src="../assets/js/custom.js"></script>

  <!-- Page Specific JS File -->
</body>
</html>
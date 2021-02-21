@extends('admin.master')

@section('main')
<div class="section-header">
  <h1>Profil Admin</h1>
</div>
<div class="section-body">
  <h2 class="section-title">Hi, {{ Auth::user()->name  }}</h2>
  <p class="section-lead">
    Ubah informasi admin.
  </p>

  <div class="row mt-sm-4">
    <div class="col-12 col-md-12 col-lg-5">
      <div class="card profile-widget">
        <div class="profile-widget-header">
          <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle profile-widget-picture">
          <div class="profile-widget-items">
            <div class="profile-widget-item">
              <div class="profile-widget-item-label"></div>
              <div class="profile-widget-item-value"></div>
            </div>
            <div class="profile-widget-item">
              <div class="profile-widget-item-label"></div>
              <div class="profile-widget-item-value"></div>
            </div>
            <div class="profile-widget-item">
              <div class="profile-widget-item-label"></div>
              <div class="profile-widget-item-value"></div>
            </div>
          </div>
        </div>
        <div class="profile-widget-description">
          <div class="profile-widget-name">{{ Auth::user()->name }}<div class="text-muted d-inline font-weight-normal"><div class="slash"></div> Admin</div></div>
        </div>
        <div class="card-footer text-center">
          <div class="font-weight-bold mb-2"></div>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-12 col-lg-7">
      <div class="card">
        <form method="post" action="/profil/ubah-password" class="needs-validation" novalidate="">
          @csrf

          <div class="card-header">
            <h4>Edit Profil</h4>
          </div>
            <div class="card-body">
              @if (session('success'))
              
                <div class="alert alert-success" role="alert">
                  {{ session('success') }}
                </div>

              @endif
              <div class="row">
                <div class="form-group col-md-6 col-12">
                  <label>Username</label>
                  <input type="text" class="form-control" value="{{ Auth::user()->name }}" name="username" required="">
                  <div class="invalid-feedback">
                    Masukan Username dengan format yang tepat
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="form-group col-md-7 col-12">
                  <label>Email</label>
                  <input type="email" class="form-control" value="{{ Auth::user()->email }}" name="email" required="">
                  <div class="invalid-feedback">
                    Masukan Email dengan format yang tepat
                  </div>
                </div>
                <div class="form-group col-md-8 col-12">
                  <label for="">Password lama</label>
                    <input type="password" class="form-control" name="old_password" id="">
                    @error('old_password')
                        <div class="text-danger mt-2">{{ $message }}</div>
                    @enderror
                  <label for="">Password baru</label>
                    <input type="password" class="form-control" name="password">
                  <label for="">Konfirmasi password</label>
                    <input type="password" class="form-control" name="password_confirmation" id="">
                </div>
              </div>
          <div class="card-footer text-right">
            <button class="btn btn-primary"><i class="fas fa-save"></i> Simpan Perubahan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
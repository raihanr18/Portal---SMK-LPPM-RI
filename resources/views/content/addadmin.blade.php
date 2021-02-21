@extends('admin.master')

@section('main')

<form action="/tambah-admin/addadmin" method="post">
@csrf

<div class="row">
  <div class="col-12 col-md-6 col-lg-6">
    <div class="card">
      <div class="card-body">
        <div class="form-group">
          <label>Nama user</label>
          <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
          @error('name')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
        <div class="form-group">
          <label>E-mail</label>
          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
          @error('email')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
        <div class="form-group">
          <label>Password</label>
          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
          @error('password')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
        <div class="form-group">
          <label>Konfirmasi password</label>
          <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary">
            <i class="fas fa-user-plus"></i>
              Tambah admin
          </button>
      </div>
      </div>
    </div>

</form>

@endsection
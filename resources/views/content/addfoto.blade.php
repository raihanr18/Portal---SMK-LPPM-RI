@extends('admin.master')

@section('main')

<div class="section-header">
  <h1>Tambah Foto</h1>
</div>

<form action="/addfoto-process" method="post" enctype="multipart/form-data">
  @csrf

  <div class="row">
      <div class="col-12 col-md-6 col-lg-6">
        <div class="card">
          <div class="card-body">
            <div class="form-group">
              <label>Pilih Foto</label>
              <input type="file" class="form-control" name="foto[]" required multiple="true">
            </div>
            <div class="form-group">
              <label>Deskripsi Foto</label>
              <input type="text" class="form-control" name="deskripsi" id="" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">
                  <i class="fas fa-plus"></i>
                    Tambah
                </button>
            </div>
          </div>
        </div>
</form>

@endsection
@extends('admin.master')

@section('main')
<div class="section-header">
    <h1>Tambah Tags</h1>
</div>

<form action="/addtags-process" method="post">
    @csrf

    <div class="row">
        <div class="col-12 col-md-6 col-lg-6">
          <div class="card">
            <div class="card-body">
              <div class="form-group">
                <label>Nama Kategori</label>
                <input type="text" class="form-control" name="kategori">
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
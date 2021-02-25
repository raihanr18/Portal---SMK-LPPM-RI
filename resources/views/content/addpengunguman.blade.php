@extends('admin.master')

@section('main')
<div class="section-header">
  <h1>Tambah Pengunguman</h1>
</div>

<form action="/addannounce-process" method="post">
  @csrf

  <div class="row">
      <div class="col-12 col-md-6 col-lg-6">
        <div class="card">
          <div class="card-body">
            <div class="form-group">
              <label>Pengunguman</label>
              <textarea class="form-control" name="kategori" id="" cols="50" rows="30"></textarea>
            </div>
            <div class="form-group">
              <label for="">Status</label>
              <select id="inputState" class="form-control" name="status" style="width: 55rem"> 
                  @foreach ($form as $f)
                    <option name="status" value="{{ $f->status }}">{{ $f->status }}</option>    
                  @endforeach
              </select>
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
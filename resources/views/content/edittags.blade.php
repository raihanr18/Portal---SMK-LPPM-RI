@extends('content.mastercontent')

@section('main')
<div class="section-header">
    <h1>Edit tags</h1>
</div>

<form action="/tags/{{ $edit->id }}" method="post" style="">
    @csrf
    @method('PUT')

    <div class="row" style="">
        <div class="col-12 col-md-6 col-lg-6">
          <div class="card">
            <div class="card-body">
              <div class="form-group">
                <label>Nama Kategori</label>
                <input type="text" class="form-control" name="kategori" value="{{ $edit->title }}">
              </div>
              <div class="form-group">
                  <button type="submit" class="btn btn-primary">
                    <i class="fas fa-plus"></i>
                      Update
                  </button>
              </div>
            </div>
          </div>
</form>
@endsection
@extends('admin.master')

@section('main')

<div class="section-header">
  <h1>Tambah Artikel</h1>
</div>

<form action="/add-process" method="post" enctype="multipart/form-data">
  @csrf
  
  <div class="" style="width:2000px">
    <div class="col-12 col-md-6 col-lg-6">
      <div class="card">
        <div class="card-body">
          <div class="form-group">
            <label>Judul</label>
            <input type="text" class="form-control" name="title">
          </div>
          <div class="form-group">
            <label for="">Masukan Thumbnail</label>
            <br>
            <input type="file" name="thumbnail" id="">
          </div>
          <div class="form-group">
            <label>Deskripsi</label>
            <input type="text" name="deskripsi" id="" class="form-control">
          </div>
          <div class="form-group">
            <label for="">Kategori</label>
            <select id="inputState" class="form-control" name="category" style="width: 55rem"> 
                @foreach ($article as $t)
                  <option name="category" value="{{ $t->title }}">{{ $t->title }}</option>    
                @endforeach
            </select>
            <small class="form-text text-muted">
              Pilih kategori sesuai isi artikel
            </small>
          </div>
          <div class="form-group">
            <label for="">Status artikel</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="status" id="cek1" value="publish">
                <label class="form-check-label" for="cek1">
                  Publish
                </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="status" id="cek2" value="draft">
                <label class="form-check-label" for="cek2">
                  Draft
                </label>
            </div>
          </div>
          <div class="form-group">
            <textarea name="konten" id="content"></textarea>
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

{{-- CKEditor --}}
<script src="https://cdn.ckeditor.com/4.16.0/full/ckeditor.js"></script>
<script>
  CKEDITOR.replace('content', {
    filebrowserUploadUrl: "{{ route('ckeditor.upload', ['_token' => csrf_token() ])}}",
    filebrowserUploadMethod: 'form'
  })

  // $(document).ready(function(){

  //   $('body').on('submit', '#submitform', function(e){
  //     e.preventDefault();

  //     $.ajax({
  //       url: $(this).attr('action'),
  //       data: new FormData(this),
  //       type: 'POST',
  //       contentType: false,
  //       cache: false,
  //       processData: false,
  //       success: function(data){
  //         alert(data.msg);
  //       }
  //     })
  //   })

  // })
</script>

@endsection
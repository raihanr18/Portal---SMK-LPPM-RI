@extends('admin.master')

@section('main')

<div class="section-header">
  <h1>Artikel</h1>
</div>

<div class="container" style="margin-top: 50px;">

    <a href="/tambah-artikel" class="btn btn-primary mb-3" style="">
      <i class="fas fa-plus"></i>
      Tambah artikel
    </a>

  @if (session('success'))

  <div class="alert alert-success" role="alert">
    {{ session('success') }}
  </div>
  
  @endif
  
  @if (session('delete'))
  
    <div class="alert alert-danger" role="alert">
      {{ session('delete') }}
    </div>
  @endif
  
  <div class="card-body" style="width: 70rem; margin: 0 auto; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Judul</th>
          <th scope="col">Kategori</th>
          <th scope="col">Status</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach($artikel as $i => $a)
          <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $a->title }}</td>
            <td>{{ $a->category }}</td>
            <td>{{ $a->status }}</td>
            <td>
              <a href="/artikel/{{$a->id}}/edit-article">
                <button class="btn btn-success">
                  <i class="fas fa-pen"></i>
                </button>
              </a>
              <a href="/artikel/{{$a->id}}/delete-article">
                <button class="btn btn-danger">
                  <i class="fas fa-trash"></i>
                </button>
              </a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

@endsection
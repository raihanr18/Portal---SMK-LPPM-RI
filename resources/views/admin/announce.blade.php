@extends('admin.master')

@section('main')
<div class="section-header">
  <h1>Pengunguman</h1>
</div>

<div class="container" style="margin-top: 50px;">

    <a href="/tambah-pengunguman" class="btn btn-primary mb-3" style="">
      <i class="fas fa-plus"></i>
      Tambah pengunguman
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
          <th scope="col">Pengunguman</th>
          <th scope="col">Status</th>
          <th scope="col">Dibuat</th>
          <th scope="col">Diubah</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach($announce as $i => $a)
          <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $a->announcement }}</td>
            <td>{{ $a->status }}</td>
            <td>{{ $a->created_at }}</td>
            <td>{{ $a->updated_at }}</td>
            <td>
              <a href="/pengunguman/{{$a->id}}/edit-pengunguman">
                <button class="btn btn-success">
                  <i class="fas fa-pen"></i>
                </button>
              </a>
              <a href="/pengunguman/{{$a->id}}/delete-pengunguman">
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
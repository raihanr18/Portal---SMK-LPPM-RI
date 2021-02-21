@extends('admin.master')

@section('main')

<div class="section-header">
  <h1>Foto portal</h1>
</div>

{{-- Tabel --}}

<div class="container">
  <a href="/tambah-foto" class="btn btn-primary mb-3" style="">
      <i class="fas fa-plus"></i>
      Tambah foto
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
            <th scope="col">foto</th>
            <th scope="col">deskripsi</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach($foto as $i => $d)
            <tr>
              <td>{{ ++$i }}</td>
              <td><img src="/galeri/{{ $d->content }}" alt="" width="100"></td>
              <td>{{$d->deskripsi}}</td>
              <td>
                <a href="/foto/{{ $d->id }}/deleteFoto">
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
  
  {{-- /Tabel --}}
</div>

@endsection
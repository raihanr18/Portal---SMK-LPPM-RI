@extends('admin.master')

@section('main')

<div class="section-header">
    <h1>Tags</h1>
</div>

{{-- Tabel --}}

<div class="container">
    <a href="/tambah-tags" class="btn btn-primary mb-3" style="">
        <i class="fas fa-plus"></i>
        Tambah kategori
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
              <th scope="col">Kategori</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach($tags as $i => $d)
              <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $d->title }}</td>
                <td>
                  <a href="/tags/{{ $d->id }}/edit-tags">
                    <button class="btn btn-success">
                      <i class="fas fa-pen"></i>
                    </button>
                  </a>
                  <a href="/tags/{{ $d->id }}/deleteTags">
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
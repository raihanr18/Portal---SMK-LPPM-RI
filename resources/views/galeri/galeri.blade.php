@extends('galeri.master')

@section('judul_galeri')



@section('konten',)

<div class="row" style="margin: 1.2cm;">
  @foreach ($galeri as $g)
    <div class="column" style="float: left; padding: 6px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
      <img src="/galeri/{{$g->content}}" alt="..." width="300" height="200">
      <details>
        <summary>Detail</summary>
        {{$g->deskripsi}}
      </details>
    </div>
  @endforeach
</div>

{{-- <div class="container" style="width:1200px;border:1px solid black;">
  <h1 style="text-align:center;">GALERI</h1>
    <div class="card" style="width: 18rem; display:flex;">
      @foreach ($galeri as $g)
        <img src="/galeri/{{ $g->content }}" class="card-img-top" alt="...">
      @endforeach
    </div>
  </div> --}}
    
@endsection
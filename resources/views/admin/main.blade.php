@extends('admin.master')

@section('main')

<div class="section-header">
  <h1>Dashboard</h1>
</div>
<div class="row">
  <div class="col-lg-3 col-md-6 col-sm-6 col-12">
    <div class="card card-statistic-1">
      <div class="card-icon bg-primary">
        <i class="far fa-file-alt"></i>
      </div>
      <div class="card-wrap">
        <div class="card-header">
          <h4>Artikel</h4>
        </div>
        <div class="card-body">
          {{ $data }}
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6 col-sm-6 col-12">
    <div class="card card-statistic-1">
      <div class="card-icon bg-danger">
        <i class="fas fa-tags"></i>
      </div>
      <div class="card-wrap">
        <div class="card-header">
          <h4>Tags</h4>
        </div>
        <div class="card-body">
          {{ $tags }}
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6 col-sm-6 col-12">
    <div class="card card-statistic-1">
      <div class="card-icon bg-warning">
        <i class="fas fa-image"></i>
      </div>
      <div class="card-wrap">
        <div class="card-header">
          <h4>Foto</h4>
        </div>
        <div class="card-body">
          {{ $galeri }}
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6 col-sm-6 col-12">
    <div class="card card-statistic-1">
      <div class="card-icon bg-success">
        <i class="fas fa-video"></i>
      </div>
      <div class="card-wrap">
        <div class="card-header">
          <h4>Video</h4>
        </div>
        <div class="card-body">
          69
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SMK LPPM RI BANDUNG</title>

  <!-- FONT-->  

  <!-- Bootstrap core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../css/blog-post.css" rel="stylesheet">

</head>

<body>

  

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Post Content Column -->
      <div class="col-lg-8">

        <!-- Title -->
        <h1 class="mt-4">{{ $artikel->title }}</h1>

        <hr>

        <!-- Date/Time -->
        <p>Dibuat, {{ $artikel->created_at }}</p>

        <hr>

        <!-- Preview Image -->
        <img class="img-fluid rounded" src="/content/{{$artikel->thumbnail}}" alt="">

        <hr>

        <!-- Post Content -->
        <p class="lead">{!!$artikel->content!!}</p>

        <hr>

        <!-- Comments Form -->
        {{-- <div class="card my-4">
          <h5 class="card-header"></h5>
          <div class="card-body">
            <form>
              <div class="form-group">
                <textarea class="form-control" rows="3"></textarea>
              </div>
              <button type="submit" class="btn btn-primary"></button>
            </form>
          </div>
        </div> --}}

        <!-- Single Comment -->
        <div class="media mb-4">
          <img class="d-flex mr-3 rounded-circle" src="" alt="">
          <div class="media-body">
            <h5 class="mt-0"></h5>
            
          </div>
        </div>

        <!-- Comment with nested comments -->
        <div class="media mb-4">
          <img class="d-flex mr-3 rounded-circle" src="" alt="">
          <div class="media-body">
            <h5 class="mt-0"></h5>
            

            <div class="media mt-4">
              <img class="d-flex mr-3 rounded-circle" src="" alt="">
              <div class="media-body">
                <h5 class="mt-0"></h5>
                
              </div>
            </div>

            <div class="media mt-4">
              <img class="d-flex mr-3 rounded-circle" src="" alt="">
              <div class="media-body">
                <h5 class="mt-0"></h5>
                
              </div>
            </div>

          </div>
        </div>

      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Search Widget -->
        <div class="card my-4">  
            <a href="/" class="btn btn-primary">Kembali</a>
        </div>

        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header">Tags</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li style="color: blue">
                    {{ $artikel->category }}
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Side Widget -->
        <div class="card my-4">
          <h5 class="card-header">Deskripsi</h5>
          <div class="card-body">
            {{$artikel->deskripsi}}
          </div>
        </div>

      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-primary">
    <div class="container">
      <p class="m-0 text-center text-white">SMK LPPM RI BANDUNG</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>

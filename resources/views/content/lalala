<!doctype html>
<html lang="en">
  <head>
    <title>SMK LPPM RI BANDUNG</title>

    <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="../node_modules/summernote/dist/summernote-bs4.css">
  <link rel="stylesheet" href="../node_modules/codemirror/lib/codemirror.css">
  <link rel="stylesheet" href="../node_modules/codemirror/theme/duotone-dark.css">
  <link rel="stylesheet" href="../node_modules/selectric/public/selectric.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/css/components.css">
  </head>
  <body>
    <div class="card" style="width: 70rem; margin: 0 auto">
      <form action="/add-process" method="post" enctype="multipart/form-data">
        @csrf
          <label for="">Judul</label>
            <input type="text" name="title" class="form-control" id="formGroupExampleInput" style="width: 55rem">
          <br>
          <label for="thumbnail">Masukan Thumbnail</label>
            <input type="file" class="form-control-file" id="thumbnail" name="thumbnail">
          <br>
          <label for="">Deskripsi</label>
            <input type="text" name="deskripsi" class="form-control" style="width: 55rem">
          <br>
          <label for="inputState">Kategori</label>
            <select id="inputState" class="form-control" name="category" style="width: 55rem">
              <option selected value="Ekstrakulikuler">Ekstrakulikuler</option>
              <option value="Edukasi">Edukasi</option>
              <option value="Pengetahuan umum">Pengetahuan umum</option>
            </select>
            <small class="form-text text-muted">
              Pilih kategori sesuai isi artikel
            </small>
            <br>
            <label>Status artikel</label>
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
            <br>
            <label for="">Isi Artikel</label>
              <textarea name="konten" class="form-control" id="content"></textarea>
          
          <input type="submit" class="form-control btn btn-primary" value="Upload" style="width:150px; margin-top:5px">
      </form>      
    </div>


{{-- tinymce --}}
<script src="https://cdn.tiny.cloud/1/ykpiea0udcgh1o38bxd42209ym76uv8yvmosntapa1u9aahf/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
  tinymce.init({
      selector: 'textarea',

      image_class_list: [
      {title: 'img-responsive', value: 'img-responsive'},
      ],
      height: 500,
      setup: function (editor) {
          editor.on('init change', function () {
              editor.save();
          });
      },
      plugins: [
          "advlist autolink lists link image charmap print preview anchor",
          "searchreplace visualblocks code fullscreen",
          "insertdatetime media table contextmenu paste imagetools"
      ],
      toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image ",

      image_title: true,
      automatic_uploads: false,
      images_upload_url: '/upload',
      file_picker_types: 'image',
      file_picker_callback: function(callback, value, meta) {
          var input = document.createElement('input');
          input.setAttribute('type', 'file');
          input.setAttribute('accept', 'image/*');
          input.onchange = function() {
              var file = this.files[0];

              var reader = new FileReader();
              reader.readAsDataURL(file);
              reader.onload = function () {
                  var id = 'blobid' + (new Date()).getTime();
                  var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
                  var base64 = reader.result.split(',')[1];
                  var blobInfo = blobCache.create(id, file, base64);
                  blobCache.add(blobInfo);
                  cb(blobInfo.blobUri(), { title: file.name });
              };
          };
          input.click();
      }
  });
</script>

    <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="../assets/js/stisla.js"></script>

  <!-- JS Libraies -->
  <script src="../node_modules/summernote/dist/summernote-bs4.js"></script>
  <script src="../node_modules/codemirror/lib/codemirror.js"></script>
  <script src="../node_modules/codemirror/mode/javascript/javascript.js"></script>
  <script src="../node_modules/selectric/public/jquery.selectric.min.js"></script>

  <!-- Template JS File -->
  <script src="../assets/js/scripts.js"></script>
  <script src="../assets/js/custom.js"></script>

  <!-- Page Specific JS File -->
  </body>
</html>
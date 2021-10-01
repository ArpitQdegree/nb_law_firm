<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Add Post</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
   <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/codemirror/codemirror.css') }}">

  <link rel="stylesheet" href="{{ asset('plugins/codemirror/theme/monokai.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/simplemde/simplemde.min.css') }}">
</head>

<style>
    .note-editor.note-frame .note-editing-area {
    height: 500px;
}
</style>

<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  @include('admin.layouts.left_sidebar')

  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Text Editors</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Text Editors</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-outline card-info">
            <div class="card-header">
              <h3 class="card-title">
                NB Law Firm
              </h3>
            </div>


            {{-- @if($errors->any())
                @foreach ($errors->all() as $err)
                    <li style="color: red;">{{$title}}</li>
                @endforeach
            @endif --}}

            @if(session()->has("message"))
                <div class="alert alert-success">
                    <p>{{ session('message') }}</p>
                </div>
            @endif

            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif

            <div class="mb-3" style="margin-left:10px; margin-top:10px; margin-right:7px;">
                <label for="title" class="form-label">Title</label>
                {{-- <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Place Title Here"> --}}
                <input type="text" class="form-control" id="title" name="title" placeholder="Place Title Here">
            </div>

            <div class="mb-3" style="margin-left:10px; margin-top:10px; margin-right:7px;">
                <label for="exampleFormControlInput1" class="form-label">Slug/Url</label>
                <input type="text" class="form-control" id="slug" name="slug" disabled>
                {{-- <input type="text" class="form-control" id="slug" name="slug" disabled> --}}
            </div>


            <div class="mb-3" style="margin-left:10px; margin-top:10px; margin-right:7px;">
                <label for="exampleFormControlInput1" class="form-label">Content</label>
            </div>

            <div class="card-body">

              <textarea id="summernote">
                Place <u>text</u> <strong>here</strong>
              </textarea>
            </div>

            <div>
                <label for="image" class="ml-2">Featured Image</label>
                <div class="input-group">
                    <input type="file" class="form-control" id="featured-image" aria-describedby="inputGroupFileAddon04" aria-label="Upload" style="margin-left:10px; margin-right:16px; margin-bottom:17px;padding-bottom: 38px;">
                    {{-- <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon04">Button</button> --}}
                </div>
            </div>

            <div>
                <div class="ml-2 mb-2 mr-4">
                    <button type="submit" class="btn btn-primary">Post</button>

                    <a href="save">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </a>
                </div>

            </div>

            {{-- <div>
                <div class="ml-2 mb-2 mr-4">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div> --}}

          </div>
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->

    </section>

  </div>
  <!-- /.content-wrapper -->
  @include('admin.layouts.footer')

</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.min.js')}}"></script>
<!-- Summernote -->
<script src="{{ asset('plugins/summernote/summernote-bs4.min.js')}}"></script>

<!-- AdminLTE for demo purposes -->
<script src="{{ asset('dist/js/demo.js')}}"></script>

<!-- Page specific script -->
<script>
  $(function () {
    // Summernote
    $('#summernote').summernote()
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
      mode: "htmlmixed",
      theme: "monokai"
    });
  });
</script>

{{-- below one is added by me --}}
{{-- <script>
  $('#title').change(function(e){
      $.get('{{ route('pages.check_slug') }}',
      {'title': $(this).val()},
      function(data){
          $('#slug').val(data.slug);
      }
      );
  });
</script> --}}
</body>
</html>

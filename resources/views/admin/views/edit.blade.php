<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Edit Post</title>

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

    @include('admin.layouts.header')

    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="dist/img/Logo1.png" alt="NBLawFirm" height="60" width="60">
    </div>

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
              <li class="breadcrumb-item"><a href="">Home</a></li>
              <li class="breadcrumb-item active">Text Editors</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-outline card-info">
            <div class="card-header">
              <h3 class="card-title">
                NB Law Firm
              </h3>
            </div>



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
            <form method="post" id="camp" action="{{ route('updatepost', $post->id) }}" autocomplete="off">
            @csrf
            @method('post')
            <div class="mb-3" style="margin-left:10px; margin-top:10px; margin-right:7px;">
                <label for="title" class="form-label">Title</label>
                {{-- <input type="text" class="form-control" id="title" name="title" placeholder="Place Title Here"> --}}
                <input type="text" class="form-control" id="title" value="{{ $post->title }}" name="title">
            </div>

            <div class="mb-3" style="margin-left:10px; margin-top:10px; margin-right:7px;">
                <label for="exampleFormControlInput1" class="form-label">Slug/Url</label>
                <input type="text" class="form-control" id="slug" name="slug" placeholder="slug" disabled>
            </div>


            <div class="card-body">
                <label for="exampleFormControlInput1" class="form-label">Content</label>

                <textarea id="summernote" value="{{ $post->body }}" name="body">
                    <input type="text" class="form-control" id="body" value="{{ $post->body }}" name="body">
                </textarea>
            </div>

            <div>
                <label for="image" class="ml-2">Featured Image</label>
                <div class="input-group">
                    <input type="file" class="form-control" id="featured-image" aria-describedby="inputGroupFileAddon04" aria-label="Upload" style="margin-left:10px; margin-right:16px; margin-bottom:17px;padding-bottom: 38px;">
                </div>
            </div>

            <div>
                <div class="ml-2 mb-2 mr-4">
                    <button type="submit" class="btn btn-primary">Post</button>

                    {{-- <a href="update"> --}}
                    <a href="/post-edit/{post}">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </a>
                </div>

            </div>

            </form>
          </div>
        </div>
      </div>
    </section>

  </div>
  @include('admin.layouts.footer')

</div>

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

</body>
</html>



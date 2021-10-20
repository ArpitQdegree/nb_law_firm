<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>NB law Firm- Edit Post</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
   <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css') }}">
  {{-- <link rel="stylesheet" href="{{ asset('plugins/codemirror/codemirror.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/codemirror/theme/monokai.css') }}"> --}}
  {{-- <link rel="stylesheet" href="{{ asset('plugins/simplemde/simplemde.min.css') }}"> --}}

  {{-- below styles added by me for the fonts appear in drop down--}}
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

    <link rel="icon" href="/image/Logo1.png" sizes="16x16">

  {{-- till here added by me --}}
</head>

<style>
    .note-editor.note-frame .note-editing-area {
        height: 500px;
    }

    .card-title{
        font-family: 'Times New Roman', Times, serif;
    }

    .form-label{
        font-family: 'Times New Roman', Times, serif;
    }

    #feature-image{
        font-family: 'Times New Roman', Times, serif;
    }


</style>



<body class="hold-transition sidebar-mini">
<div class="wrapper">

    @include('admin.layouts.header')

    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="/dist/img/Logo1.png" alt="NBLawFirm" height="60" width="60">
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
              <li class="breadcrumb-item"><a href="admin/">Home</a></li>
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
            <form method="post" id="camp" action="{{ route('updatepost', $post->id) }}" autocomplete="off" enctype="multipart/form-data">
            @csrf
            @method('post')
            <div class="mb-3" style="margin-left:10px; margin-top:10px; margin-right:7px;">
                <label for="title" class="form-label">Title</label>
                {{-- <input type="text" class="form-control" id="title" name="title" placeholder="Place Title Here"> --}}
                <input type="text" class="form-control" id="title" value="{{ $post->title }}" name="title">
            </div>
            <br>
            <div class="mb-3" style="margin-left:10px; margin-top:10px; margin-right:7px;">
                <label for="exampleFormControlInput1" class="form-label">Slug/Url</label>
                <input type="text" class="form-control" id="slug" name="slug" value="{{ $post->slug }}" placeholder="slug" disabled>
            </div>
            <br>
            <div class="mb-3" style="margin-left:10px; margin-top:10px; margin-right:7px;">
                <label for="exampleFormControlInput1" class="form-label">Content</label>
            </div>

            <div class="card-body">
                {{-- <label for="exampleFormControlInput1" class="form-label">Content</label> --}}
                <textarea id="summernote" name="body">
                    <input type="text" class="form-control" id="body" value="{{ $post->body }}" name="body">
                </textarea>
            </div>




            <div>
                <label for="image" class="ml-2" id="feature-image">Featured Image</label>
                <div class="input-group">
                    <input type="file" name="image" class="form-control" id="featured-image" aria-describedby="inputGroupFileAddon04" aria-label="Upload"
                    style="margin-left:10px; margin-right:16px; margin-bottom:17px;padding-bottom: 38px;">
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



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>NB law Firm- Add New Post</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
   <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/codemirror/codemirror.css') }}">

  <link rel="stylesheet" href="{{ asset('plugins/codemirror/theme/monokai.css') }}">
  {{-- <link rel="stylesheet" href="{{ asset('plugins/simplemde/simplemde.min.css') }}"> --}}

  {{-- below styles added by me for the fonts--}}
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

    {{-- below script is putted by me to avoid the console error 29-10-2021--}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/simplemde/1.11.2/simplemde.min.js" integrity="sha512-ksSfTk6JIdsze75yZ8c+yDVLu09SNefa9IicxEE+HZvWo9kLPY1vrRlmucEMHQReWmEdKqusQWaDMpkTb3M2ug==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  {{-- till here added by me --}}

  <link rel="icon" href="/image/Logo1.png" sizes="16x16">

</head>

<style>
    .note-editor.note-frame .note-editing-area {
        height: 500px;
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
        <img class="animation__shake" src="dist/img/Logo1.png" alt="NBLawFirm" height="60" width="60">
    </div>

  @include('admin.layouts.left_sidebar')

  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 id="feature-image"><b>Text Editor</b></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin">Home</a></li>
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



            @if(session()->has("message"))
                <div class="alert alert-success">
                    <p>{{ session('message') }}</p>
                </div>
            @endif

            {{-- uncomment this one --}}
            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
            <form method="post" id="camp" action="{{ url('add-post-data') }}" autocomplete="off" enctype="multipart/form-data">
                @csrf
                @method('post')
                <div class="mb-3" style="margin-left:10px; margin-top:10px; margin-right:7px;">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Place Title Here">
                    {{-- <input type="text" class="form-control" id="title" onchange="return localstorage.setItem('title')" name="title" placeholder="Place Title Here"> --}}
                </div>
                <br>
                <div class="mb-3" style="margin-left:10px; margin-top:10px; margin-right:7px;">
                    <label for="exampleFormControlInput1" class="form-label">Slug/Url</label>
                    <input type="text" class="form-control" id="slug" name="slug" placeholder="slug" disabled>
                </div>
                <br>
                <div class="mb-3" style="margin-left:10px; margin-top:10px; margin-right:7px;">
                    <label for="exampleFormControlInput1" class="form-label">Content</label>
                </div>

                <div class="card-body">
                <textarea id="summernote" name="content">
                    Place <u>text</u> <strong>here</strong>
                </textarea>
                </div>

                <div>
                    <label for="image" class="ml-2" id="feature-image">Featured Image</label>
                    <div class="input-group">
                        <input type="file" name="image" class="form-control" id="featured-image" aria-describedby="inputGroupFileAddon04" aria-label="Upload" style="margin-left:10px; margin-right:16px; margin-bottom:17px;padding-bottom: 38px;">
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

            </form>

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

    $('#summernote').summernote()
        CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
        mode: "htmlmixed",
        theme: "monokai",
    });
  });
</script>


{{-- local storage code added from here --}}
{{-- <script type="text/javascript">
    $(document).ready(function(){
        localstorage.clear();

        $("form").on("submit", function(){
            if(window.localstorage!==undefined){

            }
        })
    })
</script> --}}




{{-- <script>
 $('#summernote').summernote({
  toolbar: [
    ['style', ['bold', 'italic', 'underline', 'clear']],
    ['font', ['strikethrough', 'superscript', 'subscript']],
    ['fontsize', ['fontsize']],
    ['color', ['color']],
    ['para', ['ul', 'ol', 'paragraph']],
    ['height', ['height']],
    ['picture', ['picture']],
  ],

  styleTags: [
    'p',
        { title: 'Blockquote', tag: 'blockquote', className: 'blockquote', value: 'blockquote' },
        'pre', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6'
	],
});
</script> --}}
</body>
</html>

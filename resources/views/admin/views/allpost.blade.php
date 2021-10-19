@extends('admin.layouts.left_sidebar')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>NB Law Firm | All Post</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <!-- summernote -->
  {{-- <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css') }}"> --}}
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">

  {{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css"> --}}
  <!-- Till here DataTables -->

  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">

   {{-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script> --}}


</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">

    @include('admin.layouts.header')

    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="dist/img/Logo1.png" alt="NBLawFirm" height="60" width="60">
    </div>

    <div class="content-wrapper">
        <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 style="font-family: 'Times New Roman', Times, serif;">All Post</h1><br>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item" style="font-family: 'Times New Roman', Times, serif;"><a href="admin/">Home</a></li>
                <li class="breadcrumb-item active" style="font-family: 'Times New Roman', Times, serif;">All Post</li>
                </ol>
            </div>
            </div>
        </div>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title" style="font-family: 'Times New Roman', Times, serif;">All Post</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>


                <div class="card-body p-0">
                    <table class="table table-striped table-bordered" id="example1">
                        <thead style="font-family: 'Times New Roman', Times, serif;">
                            <tr>
                                <th style="width: 1%">
                                    Sr.No.
                                </th>
                                <th style="width: 20%">
                                    Title
                                </th>

                                <th style="width: 20%">
                                    Body
                                </th>
                                
                                {{-- <th style="width: 1%">
                                    Slug
                                </th> --}}

                                <th style="width: 8%" class="text-center">
                                    Image
                                </th>

                                <th style="width: 20%" class="text-center">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    @foreach ($posts as $k => $data)
                                        <tr>
                                            <td style="font-family: 'Times New Roman', Times, serif;">{{ $data->id}}</td>
                                            <td style="font-family: 'Times New Roman', Times, serif;">{{ $data->title }}</td>
                                            <td style="font-family: 'Times New Roman', Times, serif;">{{ $data->body }}</td>
                                            {{-- <td>"{{ URL::to($data->slug) }}"</td> --}}
                                            <td><img src ="{{ URL::to($data->image) }}" width="50"></td>
                                            {{-- <td>{{ $data->status }}</td> --}}

                                            <td class="project-actions text-right">
                                                <a class="btn btn-primary btn-sm" href="#" style="font-family: 'Times New Roman', Times, serif;">
                                                    <i class="fas fa-folder">
                                                    </i>
                                                    View
                                                </a>
                                                {{-- <a class="btn btn-info btn-sm" href="/post-edit"> --}}
                                                <a class="btn btn-info btn-sm" href="/post-edit/{{ $data->id}}" style="font-family: 'Times New Roman', Times, serif;">
                                                    <i class="fas fa-pencil-alt">
                                                    </i>
                                                    Edit
                                                </a>
                                                <form method="POST" action="{{ route('postdelete', $data->id) }}" style="font-family: 'Times New Roman', Times, serif;">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}

                                                    <div class="form-group">
                                                        <input type="submit" class="btn btn-danger delete-user" value="Delete">
                                                    </div>
                                                </form>

                                            </td>
                                        </tr>
                                    @endforeach
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>



    @include('admin.layouts.footer')


    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Summernote -->
    <script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>

    {{-- datatables scripts starts--}}
    <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>

   

    {{-- <script type="text/javascript" src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" charset="utf8" src="/DataTables/datatables.js"></script> --}}
    {{-- datatables scripts ends --}}

    <script type="text/javascript">
        $(document).ready(function(){
                $('#example1').DataTable({
                    dom: 'Bfrtip',
                    serverSide: true,
                    ajax: "{{ route('allpost') }}",
                    orderable: true,
                    searchable: true,
                    // searching: true,
                    lengthChange: false,
                    info: true,
                    responsive: true,
                    buttons: ["copy", "csv", "excel", "pdf", "print", "colvis"],
                });
               
        });
    </script>
</body>
</html>

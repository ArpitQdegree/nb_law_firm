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
  <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css') }}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
  <!-- Till here DataTables -->

  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">

   {{-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script> --}}



    {{-- <script src="//code.jquery.com/jquery-1.12.3.js"></script> --}}
    {{-- <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script> --}}
    {{-- <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script> --}}
    {{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css"> --}}

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
                <h1>All Post</h1><br>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">All Post</li>
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
                    <h3 class="card-title">All Post</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>


                <div class="card-body p-0">
                    <table class="table table-striped projects" id="example1">
                        <thead>
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

                                <th style="width: 8%" class="text-center">
                                    Status
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    @foreach ($posts as $posts => $data)
                                        <tr>
                                            <td>{{ $data->id}}</td>
                                            <td>{{ $data->title }}</td>
                                            <td>{{ $data->body }}</td>
                                            {{-- <td>{{ $data->status }}</td> --}}

                                            <td class="project-actions text-right">
                                                <a class="btn btn-primary btn-sm" href="#">
                                                    <i class="fas fa-folder">
                                                    </i>
                                                    View
                                                </a>
                                                {{-- <a class="btn btn-info btn-sm" href="/post-edit"> --}}
                                                <a class="btn btn-info btn-sm" href="/post-edit/">
                                                    <i class="fas fa-pencil-alt">
                                                    </i>
                                                    Edit
                                                </a>
                                                <a class="btn btn-danger btn-sm" href="/post-delete/{id}">
                                                    <i class="fas fa-trash">
                                                    </i>
                                                    Delete
                                                </a>
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
    {{-- datatables scripts ends --}}


    <script type="text/javascript">
        $(function () {
                $('#example1').DataTable({
                    "dom": 'Bfrtip',
                    "serverSide": true,
                    "lengthChange": false,
                    "searching": true,
                    "info": true,
                    "pagination":true,
                    "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
                });
        });

        // performing delete operation 
        $(function(){

            // console.log("hello");
            $(document).on("click",".btn-danger", function(){

                var conf = confirm("Are you sure want to delete");

                if(conf){

                    var delete_id = $(this).attr("data-id");
                    // var delete_id = $(this).attr("post-delete/{id}");

                    var postdata = {
                        "_token": "{{ csrf_token() }}",
                        "delete_id": delete_id,
                    }

                    $.post( "{{ route('postdelete') }}", postdata, function(response){
                        var data = $.parseJSON(response);

                        if(data.status == 1){
                            console.log("hello");
                            location.reload();
                        }
                        else{
                            alert(data.message);
                        }
                    })
                }
            });
            
        });
    </script>
</body>
</html>

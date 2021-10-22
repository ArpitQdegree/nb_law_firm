<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield("title")</title>

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
    @include('admin.layouts.header')
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/Logo1.png" alt="NBLawFirm" height="60" width="60">
  </div>

  @include("admin.layouts.left_sidebar")


  @include("admin.layouts.styles")

  @section("content")
  @show

</div>

    @include('admin.layouts.footer')

    @include('admin.layouts.scripts')
</body>
</html>

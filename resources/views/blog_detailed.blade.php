<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
            @section('title', 'Blog')
        <title>NB Law Firm - @yield('title')</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Law Firm Website Template" name="keywords">
        <meta content="Law Firm Website Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@1,600;1,700;1,800&family=Roboto:wght@400;500&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    @include('header')

        <p>
            On click on the blog card this detail of that particular blog will appear
        </p>

        {{-- @foreach ($posts->chunk(3) as $chunk)
            <tr>
                <div class="card-group" style="margin-left: 100px;margin-right: 100px; padding:25px;">
                    @foreach ($chunk as $post)
                    <div class="card">
                        <img src="{{$post->image}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><a href="" >{{ $post->title }}</a></h5>
                                <p class="card-text"><a href="" >{{ $post->body }}</a></p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div><span>&nbsp &nbsp</span>
                        @endforeach
                    </div>
            </tr>
        @endforeach --}}




@include('layouts.footer')

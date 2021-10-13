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

    <style>
        .top-bar .logo h1 {
            margin: 0;
            color: #aa9166;
            font-size: 32px;
            line-height: 55px;
            font-weight: 800;
        }

        .text{
            text-align: justify;
        }

        .contact-text{
            color: black;
        }

        .newsletter .btn {
            position: absolute;
            top: 297px;
            right: 17px;
            height: 40px;
            padding: 8px 20px;
            font-size: 14px;
            font-weight: 500;
            text-transform: uppercase;
            color: #f8f6f4;
            background: #121518;
            border-radius: 0;
            border: 2px solid;
            /* border: 2px solid #aa9166; */
            transition: .3s;
        }



    </style>

    <body>
        @include('header')
        <div class="wrapper">
            <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>Blogs</h2>
                        </div>
                        <div class="col-12">
                            <a href="/">Home</a>
                            <a href="">Blog</a>
                        </div>
                    </div>
                </div>
            </div>



                {{-- card starts here --}}
                @foreach ($posts->chunk(3) as $chunk)
                    <tr>
                        <div class="card-group" style="margin-left: 100px;margin-right: 100px; padding:25px;">
                            @foreach ($chunk as $post)

                                <div class="card">
                                    <img src="{{$post->image}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                    {{-- <h5 class="card-title">{{ $post->title }}</h5> --}}
                                    <h5 class="card-title"><a href="" >{{ $post->title }}</a></h5>
                                    {{-- <p class="card-text">{{ $post->body }}</p> --}}
                                    <p class="card-text"><a href="" >{{ $post->body }}</a></p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                </div><span>&nbsp &nbsp</span>
                                @endforeach
                            </div>
                    </tr>
                @endforeach

                {{ $posts->render() }}

                {{-- till here added by me --}}
        </div>



            <div class="service">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                                <div class="service-item">
                                    <div class="service-icon">
                                        <i class="fa fa-envelope"></i>
                                    </div>
                                    <h3>Our Email</h3>
                                    <p>
                                        Drop us a line anytime at nblawfirm@yahoo.com, and we’ll get back soon.
                                    </p>
                                </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                                <div class="service-item">
                                    <div class="service-icon">
                                        <i class="fa fa-globe"></i>
                                    </div>
                                    <h3>Contact Us</h3>
                                    <p>
                                       Feel free to call us on <br>

                                        ‎011-4587-4391 <br>
                                        9999221769<br>
                                        {{-- Monday - Friday, 10am - 7pm --}}
                                    </p>
                                </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                                <div class="service-item">
                                    <div class="service-icon">
                                        <i class="fa fa-map-marker" style="font-size:48px;color:golden"></i>
                                    </div>
                                    <h3>Our Address</h3>
                                    <p>
                                       Come visit us at <br>
                                        M-132, First Floor, <br>
                                        GK-2, Delhi – 110048.
                                    </p>
                                </div>
                        </div>
                    </div>
                </div>
            </div>

        @include('layouts.footer')

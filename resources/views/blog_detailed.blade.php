<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
            @section('title', 'Blog')
        <title>NB Law Firm - @yield('title')</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Law Firm Website Template" name="keywords">
        <meta content="Law Firm Website Template" name="description">

        <link rel="icon" href="{{asset('/image/Logo1.png')}}" sizes="16x16">

        <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@1,600;1,700;1,800&family=Roboto:wght@400;500&display=swap" rel="stylesheet">

        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

        <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
        <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        {{-- <link href="css/style.css" rel="stylesheet"> --}}
    </head>

    <style>
        /* .top-bar .logo h1 {
            margin: 0;
            color: #aa9166;
            font-size: 32px;
            line-height: 55px;
            font-weight: 800;
        } */

        /* .text{
            text-align: justify;
        } */

        /* .contact-text{
            color: black;
        } */

        /* .newsletter .btn {
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
            transition: .3s;
        } */

        .title {
            font-family: 'Times New Roman', Times, serif;
            margin-top: 50px;
            margin-left: 10px;
            font-style: normal;
        }

        .body{
            font-family: 'Times New Roman', Times, serif;
            margin-top: 50px;
            margin-left: 10px;
        }



    </style>
    
    <body>
        @include('header')

            <h1 class="title">{{ $post->title }}</h1>


            <p class="body">{{ $post->body }}</p>

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

         <!-- Footer Start -->
        @include('layouts.footer')

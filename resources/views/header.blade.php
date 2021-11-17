<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">

        @section('title', 'Best Matrimonail Lawywer in Delhi NCR, Family....')
        <title>NB Law Firm - @yield('title')</title>

        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <!-- Favicon -->
        <link href="{{asset('img/favicon.ico')}}" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@1,600;1,700;1,800&family=Roboto:wght@400;500&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">

        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet">
        <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    </head>

    <!-- <style>
        .top-bar .logo h1 {
            margin: 0;
            color: #aa9166;
            font-size: 32px;
            line-height: 55px;
            font-weight: 800;
        }


        .sticky {
            position: fixed;
            top: 0;
            width: 100%;
        }

       .sticky + .top-bar{
            padding-top: 60px;
        }

        .nav-bar .nav-sticky{
            padding: 10px 60px;
            margin-left: -45px;

        }


    </style> -->

    <body>
        {{-- @if (Session::has('message'))
            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
        @endif --}}
        <div class="wrapper">
            <div class="top-bar">
                <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="logo">
                                    <a href="/">
                                        <span><img src="{{asset('image/Logo1.png')}}" alt="NB Law Firm Logo" style="color: white">
                                        <span style="color: white; font-size:16px;">NB Law Firm</span></span>
                                    </a>

                                </div>
                            </div>
                            <div class="col-lg-9 col-12 px-0">
                                <div class="nav-bar">
                                    <div class="container-fluid">
                                        <nav class="navbar navbar-expand-lg bg-dark navbar-dark">

                                            <!-- <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                                                <span class="navbar-toggler-icon"></span>
                                            </button> -->

                                            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                                                <div class="navbar-nav mr-auto">
                                                    <a href="/" class="nav-item nav-link {{ request()->is('/') ? 'active' : '' }} ">Home</a>


                                                    <a href="<?=route('about-us')?>" class="nav-item nav-link {{ request()->is('about-us') ? 'active' : '' }}">About</a>

                                                    <a href="<?=route('our-services')?>" class="nav-item nav-link {{ request()->is('our-services') ? 'active' : '' }}">Our Services</a>



                                                    <a href="<?=route('media')?>" class="nav-item nav-link {{ request()->is('media') ? 'active' : '' }}">Media</a>


                                                    <a href="<?=route('disclamier')?>" class="nav-item nav-link {{ request()->is('disclamier') ? 'active' : '' }}">Disclamier</a>


                                                    <a href="<?=route('blog')?>" class="nav-item nav-link {{ request()->is('blog') ? 'active' : '' }}">Blog</a>



                                                    <a href="<?=route('contact-us')?>" class="nav-item nav-link {{ request()->is('contact-us') ? 'active' : '' }}">Contact Us</a>


                                                    <a href="<?=route('our-team')?>" class="nav-item nav-link {{ request()->is('our-team') ? 'active' : '' }}">Our Team</a>
                                                </div>

                                            </div>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 px-0">
                            <div class="nav-bar">
                                <div class="nav-font">

                                <span><i class="fa fa-calendar" aria-hidden="true" style="color: white;">&nbsp;&nbsp;Mon - Fri&nbsp;&nbsp;10:00 AM - 8:00 PM</i></span>&nbsp;&nbsp;
                                <span><i class="fa fa-phone-alt" aria-hidden="true" style="color: white; cursor: pointer;">&nbsp;&nbsp;<a href="tel:+01145874391" style="color:white;">+011-4587-4391</a></i></span>&nbsp;&nbsp;

                                <span><i class="fa fa-phone-alt" aria-hidden="true" style="color: white; cursor: pointer;">&nbsp;&nbsp;<a href="tel:+91-9999221769" style="color:white;">+91-9999221769</a></i></span>&nbsp;&nbsp;

                                <span><i class="fa fa-envelope" aria-hidden="true" style="color: white; cursor: pointer;">&nbsp;&nbsp;<a href="mailto:nblawfirm@yahoo.com" style="color:white;">nblawfirm@yahoo.com</a></i></span>

                                <nav class="navbar navbar-expand-lg bg-dark navbar-dark float-right">

                                            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                                                <span class="navbar-toggler-icon"></span>
                                            </button>
                                </nav>

                                <a class="btn right" style="float: right" href="contact-us">Get in Touch</a>

                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
        </div>

         <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset('lib/easing/easing.min.js')}}"></script>
        <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
        <script src="{{asset('lib/isotope/isotope.pkgd.min.js')}}"></script>

        <!-- Template Javascript -->
        <script src="{{asset('js/main.js')}}"></script>
    </body>
</html>

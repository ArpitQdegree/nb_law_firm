<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">

        @section('title', 'Best Matrimonail Lawywer in Delhi NCR, Family....')
        <title>NB Law Firm - @yield('title')</title>

        {{-- <meta content="width=device-width, initial-scale=1.0" name="viewport"> --}}

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@1,600;1,700;1,800&family=Roboto:wght@400;500&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet">
        <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{asset('css/style.css')}}" rel="stylesheet">

    </head>

    <style>
        .top-bar .logo h1 {
            margin: 0;
            color: #aa9166;
            font-size: 32px;
            line-height: 55px;
            font-weight: 800;
        }

        /* #search-field {
             display: none;
        }

        #btn:hover + #search-field {
            display: inline-block;
        } */

    </style>

    <body>
        <div class="wrapper">
            <!-- Top Bar Start -->
            <div class="top-bar">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="logo">
                                <a href="">
                                    <h1>NB Law Firm</h1>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="top-bar-right">
                                <div class="text">
                                    <h2>8:00 - 9:00</h2>
                                    <p>Opening Hour Mon - Fri</p>
                                </div>
                                <div class="text">
                                    {{-- <i class="fa fa-phone" aria-hidden="true"></i> --}}
                                    <h2>011-4587-4391</h2>
                                    {{-- <p>Call Us For Free Consultation</p> --}}
                                </div>
                                <div class="text">
                                    <p>nblawfirm@yahoo.com</p>
                                </div>

                                {{-- <div class="social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->

            <!-- Nav Bar Start -->
            <div class="nav-bar">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                        <a href="#" class="navbar-brand">MENU</a>
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto">
                                <a href="/" class="nav-item nav-link active">Home</a>
                                <a href="about-us" class="nav-item nav-link">About</a>
                                <div class="nav-item dropdown">
                                    <a href="/our-services" class="nav-link dropdown-toggle" data-toggle="dropdown">Our Services</a>
                                    <div class="dropdown-menu">
                                        {{-- <div class="col-md-3"> --}}
                                        <div class="row">
                                            <div class="col"><a href="#" class="dropdown-item">Civil Suits In Property</a></div>
                                            <div class="col"><a href="#" class="dropdown-item">Annulment of Marriage</a></div>
                                            <div class="col"><a href="#" class="dropdown-item">Maintenance & Alimony</a></div>
                                            <div class="col"><a href="#" class="dropdown-item">NRI Divorce Legal Support</a></div>
                                            <div class="col"><a href="#" class="dropdown-item">Civil Suits For Partition</a></div>
                                            <div class="col"><a href="#" class="dropdown-item">Transfer Petition</a></div>
                                            <div class="col"><a href="#" class="dropdown-item">Will Probation Cases</a></div>
                                            <div class="col"><a href="#" class="dropdown-item">498A & Allied Criminal</a></div>
                                            <div class="col"><a href="#" class="dropdown-item">Child Custody and Visitors</a></div>
                                            <div class="col"><a href="#" class="dropdown-item">Mutual Consent and Contested Divorce</a></div>
                                            <div class="col"><a href="#" class="dropdown-item">Domestic Violence Cases</a></div>
                                            <div class="col"><a href="#" class="dropdown-item">Restitution of Conjugal Rights</a></div>
                                            {{-- <a href="single.html" class="dropdown-item">Maintenance & Alimony</a> --}}
                                        </div>
                                    </div>
                                </div>
                                {{-- <a href="service.html" class="nav-item nav-link">Our Services</a> --}}
                                <a href="team.html" class="nav-item nav-link">Media</a>
                                <a href="/disclamier" class="nav-item nav-link">Disclamier</a>
                                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                                    <div class="dropdown-menu">
                                        <a href="blog.html" class="dropdown-item">Blog Page</a>
                                        <a href="single.html" class="dropdown-item">Single Page</a>
                                    </div>
                                </div>
                                <a href="contact-us" class="nav-item nav-link">Contact Us</a>
                            </div>
                            <div class="ml-auto">
                                <i class="fa fa-search" aria-hidden="true"></i>
                                <a class="btn" href="contact-us">Got a Query</a>
                                {{-- <a class="btn" href="https://htmlcodex.com/law-firm-website-template">Got a Query</a> --}}
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- Nav Bar End -->
            @include('layouts.header')

            @yield('content')

            @include('layouts.footer')




            <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/isotope/isotope.pkgd.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>

    {{-- <script type="text/javascript">
        $(document).ready(function(){
            ('.counter').each(function(){
                $(this).prop('Counter',0).animate({
                    Counter:$(this).text()
                },{
                    duration:4000,
                    easing:'swing',
                    step:function(now){
                        $(this).text(Math.ceil(now));
                    }
                });
            });
        });
    </script> --}}
</html>

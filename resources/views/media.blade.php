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

    </style>

    <body>
        <div class="wrapper">
            <!-- Top Bar Start -->
            <div class="top-bar">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="logo">
                                <a href="index.html">
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
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Our Services</a>
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
                                <a href="portfolio.html" class="nav-item nav-link">Disclamier</a>
                                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                                    <div class="dropdown-menu">
                                        <a href="blog.html" class="dropdown-item">Blog Page</a>
                                        <a href="single.html" class="dropdown-item">Single Page</a>
                                    </div>
                                </div>
                                <a href="contact.html" class="nav-item nav-link">Contact Us</a>
                            </div>
                            <div class="ml-auto">
                                <i class="fa fa-search" aria-hidden="true"></i>
                                <a class="btn" href="https://htmlcodex.com/law-firm-website-template">Got a Query</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- Nav Bar End -->

            <!-- Page Header Start -->
            <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>Media</h2>
                        </div>
                        <div class="col-12">
                            <a href="">Home</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Header End -->

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




<!-- Footer Start -->
            <div class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="footer-about">
                                <h2>About Us</h2>
                                <p>
                                    The NB Law Firm is a brain-child of Advocate Nidhi Banga ( LLM) , a successful practitioner of law.

                                    The firm came into existence in Oct 2016 at 2nd floor, Jungpura Extension, New Delhi . Among the objectives of the Firm, the foremost is Resolving Family Conflicts.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-8">
                            <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="footer-link">
                                <h2>Services Areas</h2>
                                <a href="">Civil Suits in Property</a>
                                <a href="">Annulment Of Marriage</a>
                                <a href="">Maintenance & Alimony</a>
                                <a href="">Child Custody & Visitors</a>
                                <a href="">Domestic Violence Cases</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="footer-link">
                                <h2>Useful Pages</h2>
                                <a href="about-us">About Us</a>
                                <a href="">Our Services</a>
                                <a href="">Media</a>
                                <a href="">Disclaimer</a>
                                <a href="">Blog</a>
                                <a href="">Contact Us</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="footer-contact">
                                <h2>Get In Touch</h2>
                                <p><i class="fa fa-map-marker-alt"></i>M-132, First Floor, GK-2, Delhi – 110048.</p>
                                <p><i class="fa fa-phone-alt"></i>+011-4587-4391</p>
                                <p><i class="fa fa-phone-alt"></i>9999221769</p>
                                <p><i class="fa fa-envelope"></i>nblawfirm@yahoo.com</p>
                                <div class="footer-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-youtube"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="container footer-menu">
                    <div class="f-menu">
                        <a href="">Terms of use</a>
                        <a href="">Privacy policy</a>
                        <a href="">Cookies</a>
                        <a href="">Help</a>
                        <a href="">FQAs</a>
                    </div>
                </div>
                <div class="container copyright">
                    <div class="row">
                        <div class="col-md-12">
                            <p>&copy; <a href="https://htmlcodex.com/law-firm-website-template">NBLaw</a>, All Right Reserved.</p>
                        </div>
                        {{-- <div class="col-md-6">
                            <p>Designed By <a href="https://htmlcodex.com">HTML Codex</a></p>
                        </div> --}}
                    </div>
                </div>
            </div>
            <!-- Footer End -->

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
</html>
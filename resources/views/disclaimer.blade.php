<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">

        @section('title', 'Disclamier')
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

        .text{
            text-align: justify;
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
            @include('header')
            {{-- <div class="top-bar">
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
                                    <h2>011-4587-4391</h2>

                                </div>
                                <div class="text">
                                    <p>nblawfirm@yahoo.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <!-- Top Bar End -->

            <!-- Nav Bar Start -->
            {{-- <div class="nav-bar">
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
                                        </div>
                                    </div>
                                </div>

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
                                <a class="btn" href="contact-us">Got a Query</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div> --}}
            <!-- Nav Bar End -->

             <!-- Page Header Start -->
            <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>DISCLAIMER</h2>
                        </div>
                        {{-- <div class="col-12">
                            <a href="">Home</a>
                            <a href="">About Us</a>
                        </div> --}}
                    </div>
                </div>
            </div>
            <!-- Page Header End -->

            <div class="team">
                <div class="container">
                    {{-- <div class="section-header">
                        <h2>Our Mission</h2>
                    </div> --}}
                    <div class="about-text">
                        <p class="text">
                            By proceeding further and clicking on the “AGREE” button herein below, I acknowledge that I of my own accord wish to know more about Nidhi Banga Associates for my own information and use. I further acknowledge that there has been no solicitation, invitation or inducement of any sort whatsoever from Nidhi Banga Associates or any of its members to create an Attorney-Client relationship through this knowledgesite. I further acknowledge having read and understood the Disclaimer below.
                        </p>

                        <h4>DISCLAMIER</h4>
                        <p class="text">
                            This knowledgesite (www.nblawfirm.in) is a resource for informational purposes only and is intended, but not promised or guaranteed, to be correct, complete, and up-to-date. Nidhi Banga Associates (NDA) does not warrant that the information contained on this knowledgesite is accurate or complete, and hereby disclaims any and all liability to any person for any loss or damage caused by errors or omissions, whether such errors or omissions result from negligence, accident or any other cause.
                        </p>

                        <p class="text">NDA further assumes no liability for the interpretation and/or use of the information contained on this knowledgesite, nor does it offer a warranty of any kind, either expressed or implied. The owner of this knowledgesite does not intend links from this site to other internet knowledgesites to be referrals to, endorsements of, or affiliations with the linked entities. NDA is not responsible for, and makes no representations or warranties about, the contents of Web sites to which links may be provided from this Web site.</p>

                        <p class="text">This knowledgesite is not intended to be a source of advertising or solicitation and the contents of the knowledgesite should not be construed as legal advice. The reader should not consider this information to be an invitation for a lawyer-client relationship and should not rely on information provided herein and should always seek the advice of competent counsel licensed to practice in the relevant country/state. Transmission, receipt or use of this knowledgesite does not constitute or create a lawyer-client relationship. No recipients of content from this knowledgesite should act, or refrain from acting, based upon any or all of the contents of this site.</p>

                        <p class="text">Furthermore, the owner of this knowledgesite does not wish to represent anyone desiring representation based solely upon viewing this knowledgesite or in a country/state where this knowledgesite fails to comply with all laws and ethical rules of that state. Finally, the reader is warned that the use of Internet e-mail for confidential or sensitive information is susceptible to risks of lack of confidentiality associated with sending email over the Internet.</p>
                    </div>
                </div>
            </div>


            {{-- service page starts here --}}
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
            {{-- service page ends here --}}

            <!-- Footer Start -->
            @include('layouts.footer')

            <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
            {{-- <div class="footer">
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
                    </div>
                </div>
            </div> --}}
            <!-- Footer End -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">

        @section('title', 'Disclamier')
        <title>NB Law Firm - @yield('title')</title>

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

        <link rel="icon" href="/image/Logo1.png" sizes="16x16">

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
            /* font-family: 'Times New Roman', Times, serif; */
        }


    </style>

    <body>
        <div class="wrapper">
            @include('header')


            <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>DISCLAIMER</h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="team">
                <div class="container">

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

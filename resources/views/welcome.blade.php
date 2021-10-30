<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">

        @section('title', 'Best Matrimonail Lawyer in Delhi NCR, Family....')
        <title>NB Law Firm - @yield('title')</title>

        {{-- <meta content="width=device-width, initial-scale=1.0" name="viewport"> --}}

        <!-- Favicon -->
        <link rel="icon" href="/image/Logo1.png" sizes="16x16">

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

        #message{
            overflow: auto;
            resize: vertical;
            border-color: black;
            border-width: 2px;
        }

        .newsletter input {
            height: 50px;
            border: 2px solid #121518;
            border-radius: 0;
            width: 498px;
        }

        .floating-wpp {
            position: fixed;
            z-index: 999;
            bottom: 15px;
            left: 15px;
            font-size: 14px;
            transition: bottom .2s;
        }

        /* #search-field {
             display: none;
        }

        #btn:hover + #search-field {
            display: inline-block;
        } */

        /* below style is for contact us */
        * {
        box-sizing: border-box;
        border-top-right-radius: 3px;
        border-bottom-right-radius: 3px;
        }

        .sidebar-contact {
        position: fixed;
        transform: translateY(-50%);
        top: 50%;
        left: -350px;
        width: 350px;
        height: auto;
        padding: 40px;
        background: #fff;
        box-shadow: 0 20px 50px rgba(0,0,0, .5);
        transition: 0.5s ease-in-out;
        }

        .sidebar-contact.active {
        left: 0;
        z-index: 1000;
        }

        .sidebar-contact input,
        .sidebar-contact textarea{
        width: 100%;
        height: 36px;
        padding: 5px;
        margin-bottom: 10px;
        border: 1px solid rgba(0,0,0, .5);
        outline: none;
        }

        .sidebar-contact textarea {
        height: 60px;
        resize: none;
        }

        .sidebar-contact input[type="submit"] {
        background: #00bcd4;
        color: #fff;
        cursor: pointer;
        border: none;
        font-size: 18px;

        }
        .sidebar-contact h2 {
        margin: 0 0  20px;
        padding: 0;
        }

        .toggle {
            position: absolute;
            right: -62px;
            width: 61px;
            height: 29px;
            margin-top: 60px;
            padding-left: -5px;
            text-align: center;
            cursor: pointer;
            /* background: #aa9166; */
            z-index: 176;
            font-size: 14px;
        }
        /* till here is for contact us */

.close1 {
  top: 0px;
  right: 51px;
  height: 50px;
  cursor: pointer;
  position: absolute;
  /* top: 50%;
  right: 0%; */
  padding: 12px 16px;
  transform: translate(0%, -50%);
}

@media only screen and (max-width: 600px) {
 #carousel{
    width: auto;
   max-height: 200px;
  }
}

    </style>

    <body>
        @include('header')

        <div class="wrapper">
            <!-- Carousel Start -->
            <div id="carousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel" data-slide-to="1"></li>
                    <li data-target="#carousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        {{-- <img src="image/carousel-1.jpg" alt="Carousel Image"> --}}
                        <img src="image/full.jpg" alt="Carousel Image">
                        <div class="carousel-caption">
                            <h1 class="animated fadeInLeft">We fight for your justice</h1>
                        </div>
                    </div>

                    <div class="carousel-item">
                        {{-- <img src="image/carousel-2.jpg" alt="Carousel Image"> --}}
                        <img src="image/gavel.jpg" alt="Carousel Image">
                        <div class="carousel-caption">
                            <h1 class="animated fadeInLeft">We prepared to oppose for you</h1>
                        </div>
                    </div>

                    <div class="carousel-item">
                        {{-- <img src="image/carousel-3.jpg" alt="Carousel Image"> --}}
                        <img src="image/lady-Justice-Statue.jpg" alt="Carousel Image">
                        <div class="carousel-caption">
                            <h1 class="animated fadeInLeft">We fight for your privilege</h1>
                        </div>
                    </div>
                </div>

                <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <!-- Carousel End -->


            <!-- Top Feature Start-->
            <div class="feature-top">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-md-3 col-sm-6">
                            <div class="feature-item">
                                <i class="far fa-check-circle"></i>
                                <h3>Legal</h3>
                                <p>Govt Approved</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="feature-item">
                                <i class="fa fa-user-tie"></i>
                                <h3>Attorneys</h3>
                                <p>Expert Attorneys</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="feature-item">
                                <i class="far fa-thumbs-up"></i>
                                <h3>Success</h3>
                                <p>99.99% Case Won</p>
                                {{-- <span class="counter" style="font-size: 18px;">100</span><pre>%</pre> --}}
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="feature-item">
                                <i class="far fa-handshake"></i>
                                <h3>Support</h3>
                                <p>Quick Support</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Top Feature End-->


            <!-- About Start -->
            <div class="about">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-md-6">
                            <div class="about-img">
                                <img src="image/Logo1.png" alt="Image">
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6">
                            <div class="section-header">
                                <h2>Welcome To NB Law Firm</h2>
                            </div>
                            <div class="about-text" style="text-align: justify;">
                                <p>

                                    NB Law Firm is known as one of the trusted and best firms in Delhi NCR where you will find well experienced and professionals advocate who are able to handle divorce cases in a professional way. If you are searching for the services of a professional lawyer who can handle your cases, we are available 24/7 to offer these expert solutions. Our matrimonial cases lawyer and family case advocate able to handle all kinds of family and matrimonial cases for our clients. Whether you need expert advice related to the divorce case or family case, we are available online to give an answer to all your queries instantly.

                                </p>
                                <p>
                                    With our professional lawyers in Delhi, the clients will find a complete range of law services related to the cases of Consent divorce, annulment of marriage, contested divorce, domestic violence and much more. We are trusted by a large number of clients because of our expertise and ability to handle every case with professionalism.
                                </p>
                                <a class="btn" href="about-us">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About End -->


            <!-- Service Start -->
            <div class="service">
                <div class="container">
                    <div class="section-header">
                        <h2>Our Services</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6">

                            <div class="service-item">
                                <div class="service-icon">
                                    <i class="fa fa-landmark"></i>
                                </div>
                                <h3>Maintenance & alimony</h3>
                                <p>
                                    When a married couple gets a divorce, the court may award “alimony” or spousal support to one of the former spouses
                                </p>
                                <a class="btn" href="services/maintenance-alimony">Learn More</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="service-item">
                                <div class="service-icon">
                                    <i class="fa fa-users"></i>
                                </div>
                                <h3>Domestic Violence Cases</h3>
                                <p>
                                    Domestic violence is any kind of behavior that a person uses, or threatens to use, to control an intimate partner….
                                </p>
                                <a class="btn" href="services/domestic-violence-cases">Learn More</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="service-item">
                                <div class="service-icon">
                                    <i class="fa fa-hand-holding-usd"></i>
                                </div>
                                <h3>Child Custody and Visitation</h3>
                                <p>
                                    Under Indian law, maximum importance is given to the best interests of the child …….
                                </p>
                                <a class="btn" href="services/child-custody" style="margin-top:-9px;">Learn More</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="service-item">
                                <div class="service-icon">
                                    <i class="fa fa-graduation-cap"></i>
                                </div>
                                <h3>NRI Divorce Legal Support</h3>
                                <p>
                                    The subject of foreign divorce in India sounds quite complicated and people are hardly usually, these cases ….. ….
                                </p>
                                <a class="btn" href="services/nri-legal-services/">Learn More</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="service-item">
                                <div class="service-icon">
                                    <i class="fa fa-gavel"></i>
                                </div>
                                <h3>Mutual Consent and Contested Divorce</h3>
                                <p>
                                    Mutual Consent Divorce is the basic way of coming out of the marriage and dissolving it legally.
                                </p>
                                <a class="btn" href="services/mutual-consent-divorce-procedure">Learn More</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="service-item">
                                <div class="service-icon">
                                    <i class="fa fa-globe"></i>
                                </div>
                                <h3>498a and Allied Criminal Proceedings</h3>
                                <p>
                                    The section was enacted to combat the menace of dowry deaths. It was introduced in the code …..
                                </p>
                                <a class="btn" href="services/498a-allied-criminal-proceedings">Learn More</a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="service-item">
                                <div class="service-icon">
                                    <i class="fa fa-graduation-cap"></i>
                                </div>
                                <h3>Civil Suits in Property</h3>
                                <p>
                                    One significant category of small claims disputes involves property damage cases.…..
                                </p>
                                <a class="btn" href="services/civil-suits-in-property">Learn More</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="service-item">
                                <div class="service-icon">
                                    <i class="fa fa-gavel"></i>
                                </div>
                                <h3>Will probation cases</h3>
                                <p>
                                    Probation in criminal law is a period of supervision over an offender, ordered by the court as …..
                                </p>
                                <a class="btn" href="services/will-probation-cases">Learn More</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="service-item">
                                <div class="service-icon">
                                    {{-- <i class="fa fa-globe"></i> --}}
                                    <i class="fas fa-heart-broken"></i>
                                </div>
                                <h3>Annulment of marriages</h3>
                                <p>
                                    Annulment is a legal procedure for declaring a marriage null and void. With the exception of bigamy…..
                                </p>
                                <a class="btn" href="services/annulment-of-marriage">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Service End -->



            <div class="service">
                <div class="container">
                    <div class="section-header">
                        <h2>NB Law Corporate Services</h2>
                    </div>
                    <p style="text-align: justify;">For any organization managing business affairs in the complex legal environment is a task seamlessly handled by the experts at the NBLaw Firm. The Firm houses a team having a cumulative experience of over twenty years in resolving intricate issues and challenges with a bespoke strategy and holistic approach. The Firm advises, guides and represents various domestic and international organizations across various sectors like healthcare, automobiles, technology, energy, real estate, consumer goods, pharmaceuticals etc, in the following matters</p>
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                                <div class="service-item">
                                    <div class="service-icon">
                                        <i class="fa fa-globe"></i>
                                    </div>
                                    <h3>Anti — Trust / Competition</h3>
                                    <p style="height:224px;">
                                        Engaged as the ‘trusted counsel’ by the Regulatory Authorities and Corporations, the team handles matters related to cartels, abuse of dominant positions, merger control, leniency applications and anti-competitive and concession
                                    </p>
                                </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                                <div class="service-item">
                                    <div class="service-icon">
                                        <i class="fa fa-globe"></i>
                                    </div>
                                    <h3>Dishonour of Cheque (Negotiable Instruments Act)</h3>
                                    <p>
                                        Also known as the ‘Cheque Bounce Case, the members of the Firm take care of the litigation as well as advisory interests of the corporate clients.
                                        The team is well versed with....
                                        {{-- Also known as the ‘Cheque Bounce Case, the members of the Firm take care of the litigation as well as advisory interests of the corporate clients. The team is well versed with the legalities involved in the cases relating to Section 138 of the Negotiable Instruments Act and represent client interests before High Courts and Supreme Court. --}}
                                    </p>
                                </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                                <div class="service-item">
                                    <div class="service-icon">
                                        <i class="fa fa-globe"></i>
                                    </div>
                                    <h3>Mergers & Acquisitions</h3>
                                    <p>
                                       From financing to cross border transactions. the Firm has experience in handling multijurisdictional work in the field of mergers, acquisitions, amalgamation, joint ventures and de-mergers. The Firm possesses expertise in servicing its clients from varied industry sectors in due diligence...

                                       {{-- From financing to cross border transactions. the Firm has experience in handling multijurisdictional work in the field of mergers, acquisitions, amalgamation, joint ventures and de-mergers. The Firm possesses expertise in servicing its clients from varied industry sectors in due diligence, shareholders agreement, share purchases agreement. Regulatory affairs and compliances. --}}
                                    </p>
                                </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                                <div class="service-item">
                                    <div class="service-icon">
                                        <i class="fa fa-globe"></i>
                                    </div>
                                    <h3>White Collar Crime and Money Laundering</h3>
                                    <p>
                                        Marking its brand in the niche but yet the most talked about fraudulent practices resulting in financial crimes causing operational difficulties in the country, the Firm has developed itself a team of robust and enthusiastic lawyers who are well-versed with the legalities and safeguard the interests of the clients when dealing with matters like market manipulation, frauds, bribery, insider trading and...
                                        {{-- Marking its brand in the niche but yet the most talked about fraudulent practices resulting in financial crimes causing operational difficulties in the country, the Firm has developed itself a team of robust and enthusiastic lawyers who are well-versed with the legalities and safeguard the interests of the clients when dealing with matters like market manipulation, frauds, bribery, insider trading and money laundering. --}}
                                    </p>
                                </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                                <div class="service-item">
                                    <div class="service-icon">
                                        <i class="fa fa-globe"></i>
                                    </div>
                                    <h3>SARFAESI Act, 2002</h3>
                                    <p style="height:357px;">
                                       The lawyers at the Firm are committed to protecting the client-facing debt collection lawsuits before Debt Recovery Tribunals, Appellate Authorities, High Courts and Supreme Court. The Firm goes to length to find the right fit to recover the Non-Performing Asset either through Securitization (acquiring financial assets), Asset Reconstruction (management of the business).....
                                       {{-- The lawyers at the Firm are committed to protecting the client-facing debt collection lawsuits before Debt Recovery Tribunals, Appellate Authorities, High Courts and Supreme Court. The Firm goes to length to find the right fit to recover the Non-Performing Asset either through Securitization (acquiring financial assets), Asset Reconstruction (management of the business) or Enforcement of Security without Court’s intervention. --}}
                                    </p>
                                </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                                <div class="service-item">
                                    <div class="service-icon">
                                        <i class="fa fa-globe"></i>
                                    </div>
                                    <h3>Insolvency and Bankruptcy Code</h3>
                                    <p>
                                       With the Government of India chartering into the insolvency and bankruptcy area, the team at NBlaw Firm  has been brainstorming and formulating strategies to manage the portfolios of lenders and borrowers and providing advisory and consultancy services under the Insolvency and Bankruptcy Code, 2016 covering issues,  Asset Reconstruction....

                                       {{-- With the Government of India chartering into the insolvency and bankruptcy area, the team at NBlaw Firm  has been brainstorming and formulating strategies to manage the portfolios of lenders and borrowers and providing advisory and consultancy services under the Insolvency and Bankruptcy Code, 2016 covering issues related to securities. structuring transactions, filing and drafting of term sheets, negotiations and regulatory framework. --}}
                                    </p>
                                </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Feature Start -->
            <div class="feature">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="section-header">
                                <h2>Why Choose Us</h2>
                            </div>
                            <div class="row align-items-center feature-item">
                                <div class="col-5">
                                    <div class="feature-icon">
                                        <i class="fa fa-gavel"></i>
                                    </div>
                                </div>
                                <div class="col-7">
                                    <h3>Experienced Team</h3>
                                    <p>
                                        Our team of experienced and skilled business/legal advisors is just a phone call away, in case you have any questions regarding the process or if you want to discuss your case. We try to make sure that all your doubts are cleared before they actually arise.
                                    </p>
                                </div>
                            </div>
                            <div class="row align-items-center feature-item">
                                <div class="col-5">
                                    <div class="feature-icon">
                                        <i class="fa fa-balance-scale"></i>
                                    </div>
                                </div>
                                <div class="col-7">
                                    <h3>QUICK AND ACCURATE SOLUTION</h3>
                                    <p>
                                        Instead of leaving behind unresolved legal issues until your next trip to India, with the help of NRI Legal World you can now get solution and advice for all your NRI legal concerns over the phone/email.
                                    </p>
                                </div>
                            </div>
                            <div class="row align-items-center feature-item">
                                <div class="col-5">
                                    <div class="feature-icon">
                                        <i class="far fa-smile"></i>
                                    </div>
                                </div>
                                <div class="col-7">
                                    <h3>SMOOTH PROCESS</h3>
                                    <p>
                                        We try to make your interaction with the authorities as smooth as possible by doing & managing all the paperwork on your behalf. Our team also provides you complete clarity about the process beforehand to set rational expectations.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="feature-img">
                                <img src="image/feature.jpg" alt="Feature">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Feature End -->


            <!-- FAQs Start -->
            <div class="faqs">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="faqs-img">
                                <img src="image/question-image.jpg" alt="Image">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="section-header">
                                <h2>Have A Questions?</h2>
                            </div>

                            <div id="accordion">
                                <div class="card">
                                    <div class="card-header">
                                        <a class="card-link collapsed" data-toggle="collapse" href="#collapseOne" aria-expanded="true">
                                            <span>1</span> Lorem ipsum dolor sit amet?
                                        </a>
                                    </div>
                                    <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <a class="card-link" data-toggle="collapse" href="#collapseTwo">
                                            <span>2</span> Lorem ipsum dolor sit amet?
                                        </a>
                                    </div>
                                    <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <a class="card-link" data-toggle="collapse" href="#collapseThree">
                                            <span>3</span> Lorem ipsum dolor sit amet?
                                        </a>
                                    </div>
                                    <div id="collapseThree" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <a class="card-link" data-toggle="collapse" href="#collapseFour">
                                            <span>4</span> Lorem ipsum dolor sit amet?
                                        </a>
                                    </div>
                                    <div id="collapseFour" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <a class="card-link" data-toggle="collapse" href="#collapseFive">
                                            <span>5</span> Lorem ipsum dolor sit amet?
                                        </a>
                                    </div>
                                    <div id="collapseFive" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="btn" href="/contact-us">Ask more</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- FAQs End -->

            <div id="WAButton"></div>
            <!-- Testimonial Start -->
            <div class="testimonial">
                <div class="container">
                    <div class="section-header">
                        <h2>Review From Client</h2>
                    </div>
                    <div class="owl-carousel testimonials-carousel">
                        <div class="testimonial-item">
                            <i class="fa fa-quote-right"></i>
                            <div class="row align-items-center">
                                <div class="col-9">
                                    <h2>Client Name</h2>
                                    <p>Profession</p>
                                </div>
                                <div class="col-12">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam accumsan lacus eget velit
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <i class="fa fa-quote-right"></i>
                            <div class="row align-items-center">
                                <div class="col-9">
                                    <h2>Client Name</h2>
                                    <p>Profession</p>
                                </div>
                                <div class="col-12">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam accumsan lacus eget velit
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <i class="fa fa-quote-right"></i>
                            <div class="row align-items-center">
                                <div class="col-9">
                                    <h2>Client Name</h2>
                                    <p>Profession</p>
                                </div>
                                <div class="col-12">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam accumsan lacus eget velit
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <i class="fa fa-quote-right"></i>
                            <div class="row align-items-center">
                                <div class="col-9">
                                    <h2>Client Name</h2>
                                    <p>Profession</p>
                                </div>
                                <div class="col-12">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam accumsan lacus eget velit
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <i class="fa fa-quote-right"></i>
                            <div class="row align-items-center">
                                <div class="col-9">
                                    <h2>Client Name</h2>
                                    <p>Profession</p>
                                </div>
                                <div class="col-12">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam accumsan lacus eget velit
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <i class="fa fa-quote-right"></i>
                            <div class="row align-items-center">
                                <div class="col-9">
                                    <h2>Client Name</h2>
                                    <p>Profession</p>
                                </div>
                                <div class="col-12">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam accumsan lacus eget velit
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <i class="fa fa-quote-right"></i>
                            <div class="row align-items-center">
                                <div class="col-9">
                                    <h2>Client Name</h2>
                                    <p>Profession</p>
                                </div>
                                <div class="col-12">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam accumsan lacus eget velit
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Testimonial End -->


            <!-- Blog Start -->
            {{-- <div class="blog">
                <div class="container">
                    <div class="section-header">
                        <h2>Latest From Blog</h2>
                    </div>
                    <div class="owl-carousel blog-carousel">
                        <div class="blog-item">
                            <h3>Lockdown measures taken by the Government of India to prevent the spread of COVID-19 pandemic</h3>
                            <div class="meta">
                                <i class="fa fa-list-alt"></i>
                                <a href="">Civil Law</a>
                                <i class="fa fa-calendar-alt"></i>
                                <p>01-Jan-2045</p>
                            </div>
                            <p>
                                COVID-19, caused by a novel virus, the coronavirus or SARS-CoV-2 is a respiratory illness that has become a pandemic. This virus is so dangerous that it can spread through droplets of saliva or discharge from the nose when an infected person coughs or sneezes. The other factor is that many carriers of the disease may […]
                            </p>
                            <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                        <div class="blog-item">
                            <h3>NRI MARRIAGES IN INDIA</h3>
                            <div class="meta">
                                <i class="fa fa-list-alt"></i>
                                <a href="">Family Law</a>
                                <i class="fa fa-calendar-alt"></i>
                                <p>01-Jan-2045</p>
                            </div>
                            <p>
                                Marriage is a universal human institution usually means a voluntary union for lifestyle of one man with one lady to the exemption of others. By and huge, Indians have a rather lost fancy for the word “foreign”. It is the extreme want to create one’s close relatives negotiate overseas that leads mother and father to […]
                            </p>
                            <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                        <div class="blog-item">
                            <h3>LANDMARK JUDGEMENTS OF 2018</h3>
                            <div class="meta">
                                <i class="fa fa-list-alt"></i>
                                <a href="">Business Law</a>
                                <i class="fa fa-calendar-alt"></i>
                                <p>01-Jan-2045</p>
                            </div>
                            <p>
                                The year 2018 has witnessed some of the most vital and life changing decisions in the history of India. These judgements has been life changing for the Indian mass and given them a better and broader perspective towards life. With the beginning of the year 2019, a quick glance of these judgements has been provided […]
                            </p>
                            <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                        <div class="blog-item">
                            <h3>Lorem ipsum dolor</h3>
                            <div class="meta">
                                <i class="fa fa-list-alt"></i>
                                <a href="">Education Law</a>
                                <i class="fa fa-calendar-alt"></i>
                                <p>01-Jan-2045</p>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor
                            </p>
                            <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                        <div class="blog-item">
                            <h3>Lorem ipsum dolor</h3>
                            <div class="meta">
                                <i class="fa fa-list-alt"></i>
                                <a href="">Criminal Law</a>
                                <i class="fa fa-calendar-alt"></i>
                                <p>01-Jan-2045</p>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor
                            </p>
                            <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                        <div class="blog-item">
                            <h3>Lorem ipsum dolor</h3>
                            <div class="meta">
                                <i class="fa fa-list-alt"></i>
                                <a href="">Cyber Law</a>
                                <i class="fa fa-calendar-alt"></i>
                                <p>01-Jan-2045</p>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor
                            </p>
                            <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                        <div class="blog-item">
                            <h3>Lorem ipsum dolor</h3>
                            <div class="meta">
                                <i class="fa fa-list-alt"></i>
                                <a href="">Business Law</a>
                                <i class="fa fa-calendar-alt"></i>
                                <p>01-Jan-2045</p>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor
                            </p>
                            <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div> --}}
            <!-- Blog End -->


            <!-- Newsletter Start -->
            {{-- <div class="container">
                <div class="newsletter">

                    <div class="section-header">
                        <h2>Send Query For Free Legal Advice:</h2>

                    <div class="form">
                        <input type="text" class="form-control" placeholder="Please Enter Your Name" required><br>
                        <input type="email" class="form-control" placeholder="Please Entery Your Email" required><br>
                        <input type="number" class="form-control" placeholder="Please Enter Your Contact No." required><br>
                        <textarea name="message" id="message" cols="60" rows="10" placeholder="Enter Your Message Here"></textarea>
                        <div class="col-md-12">
                            <div style="height: 200px; position: relative;">
                                <button type="submit" style="margin:0; position:absolute; top:50%; -ms-transform: translateY(-50%); transform: translateY(-50%);" class="btn btn-info">Submit</button>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div> --}}
            <!-- Newsletter End -->

            <!--Div where the WhatsApp will be rendered-->
            {{-- <div id="WAButton"></div> --}}

            {{-- #below line is added by me --}}

            <div class="sidebar-contact">
                <div class="close1">
                 <span class="toggle">x</span>
                </div>
                <div class="toggle">
                    {{-- <i class="fa fa-envelope" aria-hidden="true"></i> --}}
                    <img src="image/getintouch.png" alt="get-in-touch" style="background-color:black; margin-left:-1px; float:left;">
                </div>
                <h2>Contact Us</h2>

                <form action="">
                    <input type="text" placeholder="Name">
                    <input type="email" placeholder="Email">
                    <input type="rel" placeholder="Phone Number">
                    <textarea placeholder="Message"></textarea>
                    <input type="submit" value="Send">
                </form>
            </div>


            <!-- Footer Start -->
            @include('layouts.footer')

            <!-- Footer End -->
            {{-- <div id="WAButton"></div> --}}
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

        {{-- whataspp integration added here --}}

            <!--Jquery-->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
            <!--Floating WhatsApp css-->
            <link rel="stylesheet" href="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/floating-wpp.min.css">
            <!--Floating WhatsApp javascript-->
            <script type="text/javascript" src="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/floating-wpp.min.js"></script>

        {{-- till here --}}
    </body>

    {{-- below script is for the whatsapp integration --}}
    <script type="text/javascript">
        $(document).ready(function(){
           $('#WAButton').floatingWhatsApp({
                phone: '+919999221769', //WhatsApp Business phone number International format-
                 headerTitle: 'Chat with us on WhatsApp!', //Popup Title
                popupMessage: 'Hello, how can we help you?', //Popup Message
                showPopup: true, //Enables popup display
                 buttonImage: '<img src="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/whatsapp.svg" />', //Button Image
                position: "left"
            });
        });
    </script>
    {{-- till here is for the whatsapp integration --}}

    {{-- below script is for sidebar contact --}}
    <script type="text/javascript">
            $(document).ready(function(){
        $('.toggle').click(function() {
            $('.sidebar-contact').toggleClass('active');
            $('.toggle').toggleClass('active');

        })

        });
    </script>




    {{-- <script>
            var closebtns = document.getElementsByClassName("close");
            var i;

            for (i = 0; i < closebtns.length; i++) {
            closebtns[i].addEventListener("click", function() {
                this.parentElement.style.display = 'none';
            });
            }
        </script> --}}


    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> --}}

    {{-- <script type="text/javascript">
        $(document).ready(function () {
            $('.counter').each(function(){
                $(this).prop('Counter',0).animate({
                    Counter: $(this).text()
                }, {
                    duration:4000,
                    easing: 'swing',
                    step:function(now){
                        $(this).text(Math.ceil(now));
                    }
                });
            });
        });
    </script> --}}
</html>

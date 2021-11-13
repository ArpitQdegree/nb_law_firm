<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    @section('title', 'Blog')
    <title>NB Law Firm - @yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Law Firm Website Template" name="keywords">
    <meta content="Law Firm Website Template" name="description">

    <link rel="icon" href="{{ asset('/image/Logo1.png') }}" sizes="16x16">

    <link
        href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@1,600;1,700;1,800&family=Roboto:wght@400;500&display=swap"
        rel="stylesheet">

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">



    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    {{-- <link href="css/style.css" rel="stylesheet"> --}}
</head>

<style>
    .title {
        font-family: 'Times New Roman', Times, serif;
        margin-top: 50px;
        margin-left: 100px;
        font-style: normal;
    }

    .body {
        font-family: 'Times New Roman', Times, serif;
        margin-top: 50px;
        margin-left: 100px;
    }

    .comment {
        font-family: 'Times New Roman', Times, serif;
        font-style: normal;
        margin-right: 100px;
        /* margin-left: 100px; */
        margin-left: -39px;
        /* margin-top: 350px; */
    }


    .vcenter {
        vertical-align: central;
        margin-top: 20%;
        font-style: italic;
    }

    .align-text-left {
        text-align: left;
    }

    .align-text-center {
        text-align: center;
    }

    .align-text-right {
        text-align: right;
    }

    .prepbootstrap-sharing-container {
        position: fixed;
        top: 40%;
        left: 0;
        right: auto;
        display: inline-block;
        margin: 0;
        padding: 0;
        z-index: 11100;
        overflow: hidden;
        width: 64px;
    }

    .prepbootstrap-sharing-container .sharing-item {
        width: 48px;
        height: 48px;
        text-align: center;
        cursor: pointer;
    }

    .prepbootstrap-sharing-container .sharing-item:hover {
        width: 64px;
        -webkit-transition: all 0.3s ease;
        -moz-transition: all 0.3s ease;
        -o-transition: all 0.3s ease;
        transition: all 0.3s ease;
    }

    .prepbootstrap-sharing-container .sharing-img {
        display: inline-block;
        margin: auto;
        margin-top: 8px;
        width: 32px;
        height: 32px;
        background-image: url(/Content/images/sharing32x32.png);
    }

    .prepbootstrap-sharing-container .sharing-fb {
        background-color: #305891;
    }

    .prepbootstrap-sharing-container .sharing-fb .sharing-img {
        background-position: 0px 0px;
    }

    .prepbootstrap-sharing-container .sharing-gp {
        background-color: #CE4D39;
    }

    .prepbootstrap-sharing-container .sharing-gp .sharing-img {
        background-position: 0px -32px;
    }

    .prepbootstrap-sharing-container .sharing-tw {
        background-color: #2CA8D2
    }

    .prepbootstrap-sharing-container .sharing-tw .sharing-img {
        background-position: 0px -64px;
    }

    .prepbootstrap-sharing-container .sharing-li {
        background-color: #4498C8;
    }

    .prepbootstrap-sharing-container .sharing-li .sharing-img {
        background-position: 0px -96px;
    }

    .facebook-icon,
    .google-plus-icon,
    .twitter-icon,
    .linkedin-icon {
        color: #FFFFFF;
        font-size: 25px;
        padding-top: 5px;
    }

    /* h3 {
        font-family: Cursive;
    }

    p {
        font-family: Cursive;
    } */

</style>

<body>
    @include('header')
    {{-- <div class="wrapper"> --}}

    <h1 class="title">{{ $post->title }}</h1>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fa fa-calendar"> <?= $post->created_at ?> </i>

                        <?= $post->updated_at->diffforHumans() ?>
                        {{-- <i class="fa fa-calendar"> <?= $post->created_at("YYYY-MM-DD") ?> </i> --}}
                    </div>

                </div>
            </div>

            <div class="col-md-4">
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fa fa-user"> Admin</i>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fa fa-tags"> Blogs</i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <p class="body">{{ $post->body }}</p> --}}
    <p class="body"><?= $post->body ?></a></p>

    <div class="container">
        <div class="row">
            <h5>Add Comment</h5>

            <div class="col-sm-12">
                <form method="post" validate>
                    <div class="form-group">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="6"
                            placeholder="Put Your Comments Here.."></textarea>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" id="inputPassword4" placeholder="Enter Name..">

                        </div>
                        <div class="form-group col-md-6">
                            <input type="email" class="form-control" id="inputEmail4" placeholder="Enter Email..">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary float-right">Post Comment</button>
                </form>

            </div>
        </div>
    </div>


    </form>

    <div class="service">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
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

                <div class="col-md-4">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="fa fa-globe"></i>
                        </div>
                        <h3>Contact Us</h3>
                        <p>
                            Feel free to call us on <br>

                            011-4587-4391 <br>
                            9999221769<br>
                        </p>
                    </div>
                </div>

                <div class="col-md-4">
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
    {{-- </div> --}}

    <!-- Footer Start -->
    @include('layouts.footer')


    <script>
        jQuery(function($) {
            // open a popup window at the center of the screen
            function open_popup(url, width, height, scroll) {
                var left = ($(window).width() - width) / 2,
                    top = ($(window).height() - height) / 2,
                    opts = 'status=1,' + (scroll ? 'scrollbars=1,' : '') + 'width=' + width + ',height=' + height +
                    ',top=' + top + ',left=' + left;

                window.open(url, "", opts);
            }

            // add the sharing container on the page
            $('<div class="prepbootstrap-sharing-container"></div>')
                .appendTo(document.body)
                .append(
                    $(
                        '<div class="sharing-item sharing-fb"><div class="sharing-img"><i class="fab fa-facebook facebook-icon"></i></div></div>')
                    .click(function() {
                        open_popup(
                            "https://www.facebook.com/sharer/sharer.php?u=" + encodeURIComponent(document
                                .location.href),
                            600,
                            350
                        );
                    }),
                    $(
                        '<div class="sharing-item sharing-gp"><div class="sharing-img"><i class="fab fa-google-plus google-plus-icon"></i></div></div>')
                    .click(function() {
                        open_popup(
                            "https://plus.google.com/share?url=" + encodeURIComponent(document.location
                                .href),
                            500,
                            500
                        );
                    }),
                    $(
                        '<div class="sharing-item sharing-tw"><div class="sharing-img"><i class="fab fa-twitter twitter-icon"></i></div></div>')
                    .click(function() {
                        open_popup(
                            "https://twitter.com/share?url=" + encodeURIComponent(document.location.href) +
                            "&text=" + encodeURIComponent($(document).find("title").text()),
                            575,
                            400,
                            true
                        );
                    }),
                    $(
                        '<div class="sharing-item sharing-li"><div class="sharing-img"><i class="fab fa-linkedin linkedin-icon"></i></div></div>')
                    .click(function() {
                        open_popup(
                            "https://www.linkedin.com/shareArticle?mini=true&url=" +
                            encodeURIComponent(document.location.href) +
                            "&title=" + encodeURIComponent($(document).find("title").text()),
                            750,
                            400,
                            true
                        );
                    })
                );
        });
    </script>

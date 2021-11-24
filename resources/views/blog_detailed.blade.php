<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    @section('title', 'Blog')
    <title>{{ $post->title }} - NB Law Firm</title>
    {{-- <title>{{ $post->title }}</title> --}}
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
    .main{
    background-color: #121518;
    /* margin: 20px; */
    padding: 20px;
    margin: auto;
    /* min-height: 350px; */
    border-top-left-radius: 20px;
    border-top-right-radius: 20px;
    }

.btn11{
    position: relative;
    /* margin-bottom: 10px; */
    padding: 10px 20px;
    font-size: 14px;
    font-weight: 500;
    letter-spacing: 1px;
    text-transform: uppercase;
    color: white;
    border: 2px solid #aa9166;
    border-radius: 0;
    background: #121518;
    transition: .3s;
    float: right;
}

.btn11:hover{
    color: white;
    background-color: #aa9166;
}

.fa-user:before {
    content: "\f007";
    color: #aa9166;

}

.fa-tags:before {
    content: "\f02c";
    color: #aa9166;
}
.fa-calendar:before {
    content: "\f133";
    color: #aa9166;
}

.title {

    margin-top: 50px;
    margin-left: 100px;
    font-style: normal;
    /* font-family: 'Times New Roman', Times, serif; */
}

 .wapp {

    margin-top: 50px;
    text-align: justify;
}

    .comment {

        font-style: normal;
        margin-right: 100px;
        margin-left: -39px;
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
    .instagram-icon,
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

    .widget_search form > input {
    font-size: inherit;
    position: absolute;
    background: transparent;
    top: 0;
    left: 0;
    cursor: pointer;
    padding: 17px 0;
    color: transparent;
    }

    .widget_search label input {
    font-size: 17px;
    width: 100%;
    padding: 21px 20px;
    padding-left: 55px;
    }

    .screen-reader-text {
    clip: rect(1px, 1px, 1px, 1px);
    position: absolute !important;
    height: 1px;
    width: 1px;
    overflow: hidden;
    }

 .widget:first-child {
    margin-top: 20px;
}
.widget {
    border: 1px solid #e5e5e5;
    border-radius: 3px;
    margin-top: 30px;
    overflow: hidden;
    word-wrap: break-word;
}
.widget h2, .widget {
    word-wrap: break-word;
}

.widget {
    border: 1px solid #e5e5e5;
    border-radius: 3px;
    margin-top: 30px;
    overflow: hidden;
    word-wrap: break-word;
}
.widget ul li {
    border-top: 1px solid #e5e5e5;
    padding: 17px 20px 16px;
    color: #9b9b9b;
}

.widget--title {
    max-width: 100%;
    word-wrap: break-word;
    word-break: break-all;
    background: #fafafa;
    position: relative;
    font-size: 18px;
    padding: 20px 10px 20px 20px;
}

.widget ul {
    margin-top: -1px;
}
.widget ul {
    font-size: 16px;
    line-height: 24px;
}
</style>

<body>
    @include('header')

    <h1 class="title">{{ $post->title }}</h1>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="service-item text-center">
                    <div class="service-icon">
                        <i class="fa fa-calendar"> <?= $post->created_at ?> </i>

                        <?= $post->updated_at->diffforHumans() ?>
                        {{-- <i class="fa fa-calendar"> <?= $post->created_at("YYYY-MM-DD") ?> </i> --}}
                    </div>

                </div>
            </div>

            <div class="col-md-4">
                <div class="service-item text-center">
                    <div class="service-icon">
                        <i class="fa fa-user"> Admin</i>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="service-item text-center">
                    <div class="service-icon">
                        <i class="fa fa-tags"> Blogs</i>
                    </div>
                </div>
            </div>
        </div>
    </div>
   <div class="container">
     <div class="row">
         <div class="col-md-9">
      <p class="wapp"><?= $post->body ?></a></p>
     </div>

     <div class="col-md-3">
        {{-- <div class="blog_sidebar">
			<div class="widget widget_search">
                <form role="search" method="get" class="search-form" action="#">
                    <label>
                        <span class="screen-reader-text">Search for:</span>
                        <input type="search" class="search-field" placeholder="Search …" value="" name="s">
                    </label>
			    </form>
            </div>
        </div> --}}

		{{-- <div class="widget widget_recent_entries">
		    <h3 style="color: #aa9166; text-align: center;">Recent Posts</h3>
            <ul>
                <li>
                    <?php foreach ($latest_post as $key => $value) { ?>
                        <tr>
                            <a href=""><td>{{ $post->title}}</td></a><hr>
                        </tr>
                   <?php }?>


                </li>
            </ul>
		</div> --}}
        {{-- <div class="widget widget_recent_comments">
            <h3 class="widget--title" style="color: #aa9166; text-align: center;">Recent Comments</h3>
            <ul id="recentcomments"></ul>
        </div> --}}
        <div class="widget widget_categories">
            <h3 class="widget--title" style="color: #aa9166; text-align: center; margin-top:20px;">Categories</h3>
			<ul>
				<li class="cat-item cat-item-2" style="text-align:center"><a href="/blog">Blog</a></li>
	            {{-- <li class="cat-item cat-item-21"><a href="#">Media</a></li> --}}
			</ul>
		</div>
    </div>
    </div>
    </div>
  </div>
</div>

    <div class="container">
        <div class="row">

            <div class="col-sm-8">

               <div class="main">
               <h3 style="color: #aa9166; text-align: center;">Leave a comment</h3>

                @if (session()->has('success'))
                    <div class="alert alert-success">
                       {!! session()->get('success') !!}
                    </div>
                @endif
                <form method="post" validate action="<?= route('formsubmit')?>">
                    {{ csrf_field() }}
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <textarea class="form-control" name="textarea" id="exampleFormControlTextarea1" rows="6"
                            required placeholder="Put Your Comments Here.."></textarea>
                        </div>
                    </div>
                    <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="name" id="inputPassword4" required placeholder="Enter Name..">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" class="form-control" name="email" id="inputEmail4" required placeholder="Enter Email..">
                            </div>
                            <div class="form-group col-md-12">
                                <button type="submit" class="btn11 float-right">Post Comment</button>
                            </div>
                    </div>
                </form>

            </div>
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

                            ‎011-4587-4391 <br>
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
            // <span>Share With</span>
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
                        // '<div class="sharing-item sharing-gp"><div class="sharing-img"><i class="fab fa-instagram-plus instagram-plus-icon"></i></div></div>')
                        '<div class="sharing-item sharing-gp"><div class="sharing-img"><i class="fab fa-instagram instagram-icon"></i></div></div>')
                    .click(function() {
                        open_popup(
                            "https://instagram.com/share?url=" + encodeURIComponent(document.location
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

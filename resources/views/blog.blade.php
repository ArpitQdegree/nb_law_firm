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

        <link rel="icon" href="/image/Logo1.png" sizes="16x16">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@1,600;1,700;1,800&family=Roboto:wght@400;500&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="{{ asset('lib/animate/animate.min.css')}}" rel="stylesheet">
        <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
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

        .card-img-top{

            background: #f4f4f4;
            border-radius: 16px;
            box-shadow: 1px 1px 1px rgb(0 0 0 / 20%);
            overflow: hidden;
            min-height: 450px;
            font-size: 13px;
            margin-bottom: 30px;
            transform: scale(1);
            transition: .5s;
            display: block;
            text-decoration: none;
            height: 470px;
        }

        /* .card-img-top{
            width: 100%;
            height: 100%;
            object-fit: contain;
        } */


 /* .openBtn {
  background: #f1f1f1;
  border: none;
  padding: 10px 15px;
  font-size: 20px;
  cursor: pointer;
}

.openBtn:hover {
  background: #bbb;
} */

.overlay {
  height: 100%;
  width: 100%;
  display: none;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0, 0.9);
}

.overlay-content {
  position: relative;
  top: 46%;
  width: 80%;
  text-align: center;
  margin-top: 30px;
  margin: auto;
}

.overlay .closebtn {
  position: absolute;
  top: 20px;
  right: 45px;
  font-size: 60px;
  cursor: pointer;
  color: white;
}

.overlay .closebtn:hover {
  color: #ccc;
}

.overlay input[type=text] {
  padding: 15px;
  font-size: 17px;
  border: none;
  float: left;
  width: 80%;
  background: white;
}

.overlay input[type=text]:hover {
  background: #f1f1f1;
}

.overlay button {
  float: left;
  width: 20%;
  padding: 15px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.overlay button:hover {
  background: #bbb;
}


@import url("https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap");

*,
*::before,
*::after {
  box-sizing: border-box;
  padding: 0;
  margin: 0;
}

/* body {
  font-family: "Quicksand", sans-serif;
  display: grid;
  place-items: center;
  height: 100vh;
  background: #7f7fd5;
  background: linear-gradient(to right, #91eae4, #86a8e7, #7f7fd5);
} */

/* .container {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  max-width: 1200px;
  margin-block: 2rem;
  gap: 2rem;
} */

img {
  max-width: 100%;
  display: block;
  object-fit: cover;
}

.card {
  display: flex;
  flex-direction: column;
  width: clamp(20rem, calc(20rem + 2vw), 22rem);
  overflow: hidden;
  box-shadow: 0 .1rem 1rem rgba(0, 0, 0, 0.1);
  border-radius: 1em;
  background: #ECE9E6;
  background: linear-gradient(to right, #FFFFFF, #ECE9E6);

}
.card__body {
  padding: 1rem;
  display: flex;
  flex-direction: column;
  gap: .5rem;
}


.tag {
  align-self: flex-start;
  padding: .25em .75em;
  border-radius: 1em;
  font-size: .75rem;
}

.tag + .tag {
  margin-left: .5em;
}

.tag-blue {
  background: #56CCF2;
background: linear-gradient(to bottom, #2F80ED, #56CCF2);
  color: #fafafa;
}

.tag-brown {
  background: #D1913C;
background: linear-gradient(to bottom, #FFD194, #D1913C);
  color: #fafafa;
}

.tag-red {
  background: #cb2d3e;
background: linear-gradient(to bottom, #ef473a, #cb2d3e);
  color: #fafafa;
}

.card__body h4 {
  font-size: 1.5rem;
  text-transform: capitalize;
}

.card__footer {
  display: flex;
  padding: 1rem;
  margin-top: auto;
}

.user {
  display: flex;
  gap: .5rem;
}

.user__image {
  border-radius: 50%;
}

.user__info > small {
  color: #666;
}

.page-item.active .page-link {
    z-index: 0 !important;
}

.back-to-top {
    z-index: 0 !important;
}



/* @media only screen and (max-width: 600px) {
 .card-img-top{
    width: auto;
   max-height: 200px;
  }
} */
 /* {margin: 0; height: 100%; overflow: hidden} */




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
                        <button class="btn" onclick="openSearch()"><i class="fa fa-search bg-transparent" style="--fa-flash-opacity: 0.1; --fa-flash-scale: 1.25; font-size: 30px" ></i></button>
                            <!-- <a href="/">Home</a> -->
                            <a href="">Blog</a>

                        </div>
                    </div>
                </div>
            </div>

            {{-- search button added here --}}
               <!-- <form action="{{ route('search') }}" method="post" role="search">
                    {{ csrf_field() }}

                     <div class="input-group">
                        <input type="text" class="form-control" name="search" placeholder="Search blog" style="width:97%; margin-left:20px;">
                        <span class="input-group-btn">
                            <button type="submit" class="btn btn-primary" style="margin-right: 20px;">Search
                                <span class="glyphicon glyphicon-search"></span>
                            </button>
                        </span>
                    </div>

                </form> -->

            @if(session('danger'))
                <div class="alert alert-danger">
                    {{session('danger')}}
                </div>
            @endif
            <div id="myOverlay" class="overlay">
                <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
               <div class="overlay-content">
                    <form action="{{ route('search') }}" method="post" role="search">
                        {{ csrf_field() }}
                            <input type="text" placeholder="Search.." name="search">
                            <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                 </div>
            </div>


            {{-- backup of code before the error message --}}

            {{-- <div id="myOverlay" class="overlay">
                <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
               <div class="overlay-content">
                    <form action="{{ route('search') }}" method="post" role="search">
                        {{ csrf_field() }}
                            <input type="text" placeholder="Search.." name="search">
                            <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                 </div>
            </div> --}}




                 @foreach ($posts->chunk(3) as $chunk)
                      <div class="container">
                        <div class="row">
                            <div class="col-md-12">

                               <div class="card-group post-img-text mt-5">
                            @foreach ($chunk as $post)
                                <div class="card">
                                <div class="post-img">
                                    <a href="{{ route('blog.show', $post->slug) }}">
                                      <img src="{{$post->image}}" class="card-img-top" alt="...">
                                    </a>

                                    <div class="card-body">

                                        <a href="{{ route('blog.show', $post->slug) }}"><h5 class="card-title">{{ $post->title }}</h5></a>

                                        <p class="card-text"><?php substr($post->body,0); ?></a></p>


                                        {{-- <p class="card-text">{!! substr(strip_tags($post->body),0, 50) !!}......</a></p>  --}}

                                        {{-- <p class="card-text"><?= $post->body; ?></a></p> --}}
                                </div>

                                      </div>
                                </div><span>&nbsp &nbsp</span>
                            @endforeach
                        </div>
                   </div>
                </div>
         </div>
                @endforeach



                <div class="d-flex mt-4">
                    <div class="mx-auto">
                    <div class="">
                        {{$posts->links("pagination::bootstrap-4")}}
                    </div>
                </div>


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

                                        011-4587-4391 <br>
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
            <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>


            <script>
                function openSearch() {
                document.getElementById("myOverlay").style.display = "block";
                }

                function closeSearch() {
                document.getElementById("myOverlay").style.display = "none";
                }
            </script>

</div>

@include('layouts.footer')


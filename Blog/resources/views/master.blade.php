<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="TemplateMo" />
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet" />

        <title>Stand CSS Blog by TemplateMo</title>

        <!-- Bootstrap core CSS -->
        <link href="{{ asset('Blog_resources/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />

        <!-- Additional CSS Files -->
        <link rel="stylesheet" href="{{ asset('Blog_resources/css/fontawesome.css') }}" />
        <link rel="stylesheet" href="{{ asset('Blog_resources/css/templatemo-stand-blog.css') }}"/>
        <link rel="stylesheet" href="{{ asset('Blog_resources/css/owl.css') }}"/>

        <!-- Custom CSS Files -->
        <link rel="stylesheet" href="{{ asset('Blog_resources/css/mycss.css') }}" />
        @yield('Link')
    </head>
</html>
  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->


    <!-- TODO: Thay doi duong dan -->
    <!-- Header -->
    <header class="">
        <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="../public/home">
                <h2>Blog<em>.</em><mark>STREET JUMP</mark></h2>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="">
                            HOME
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Travel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Food</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Vehicle</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Music</a>
                    </li>
                </ul>
            </div>
        </div>
        </nav>
    </header>
    <!-- Header End -->

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="main-banner header-text">
        <div class="container-fluid">
        <div class="owl-banner owl-carousel">
            <div class="item">
                <img src="{{ asset('Blog_resources/images/banner-item-01.jpg') }}" alt="" />
                <div class="item-content">
                    <div class="main-content">
                        <div class="meta-category">
                            <span>TODO: Travel</span>
                        </div>
                        <a href="post-details.html"><h4>TODO: Name Post</h4></a>
                        <ul class="post-info">
                            <li><a href="#">TODO: Date</a></li>
                            <li><a href="#">TODO: Views</a></li>
                            <li><a href="#">TODO: Comments</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="{{ asset('Blog_resources/images/banner-item-02.jpg') }}" alt="" />
                <div class="item-content">
                    <div class="main-content">
                    <div class="meta-category">
                            <span>TODO: Food</span>
                        </div>
                        <a href="post-details.html"><h4>TODO: Name Post</h4></a>
                        <ul class="post-info">
                            <li><a href="#">TODO: Date</a></li>
                            <li><a href="#">TODO: Views</a></li>
                            <li><a href="#">TODO: Comments</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="{{ asset('Blog_resources/images/banner-item-03.jpg') }}" alt="" />
                <div class="item-content">
                    <div class="main-content">
                        <div class="meta-category">
                            <span>TODO: Photograph</span>
                        </div>
                        <a href="post-details.html"><h4>TODO: Name Post</h4></a>
                        <ul class="post-info">
                            <li><a href="#">TODO: Date</a></li>
                            <li><a href="#">TODO: Views</a></li>
                            <li><a href="#">TODO: Comments</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="{{ asset('Blog_resources/images/banner-item-04.jpg') }}" alt="" />
                <div class="item-content">
                    <div class="main-content">
                        <div class="meta-category">
                            <span>TODO: Vehicle</span>
                        </div>
                        <a href="post-details.html"><h4>TODO: Name Post</h4></a>
                        <ul class="post-info">
                            <li><a href="#">TODO: Date</a></li>
                            <li><a href="#">TODO: Views</a></li>
                            <li><a href="#">TODO: Comments</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="{{ asset('Blog_resources/images/banner-item-05.jpg') }}" alt="" />
                <div class="item-content">
                    <div class="main-content">
                    <div class="meta-category">
                            <span>TODO: Music</span>
                        </div>
                        <a href="post-details.html"><h4>TODO: Name Post</h4></a>
                        <ul class="post-info">
                            <li><a href="#">TODO: Date</a></li>
                            <li><a href="#">TODO: Views</a></li>
                            <li><a href="#">TODO: Comments</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="{{ asset('Blog_resources/images/banner-item-06.jpg') }}" alt="" />
                <div class="item-content">
                    <div class="main-content">
                        <div class="meta-category">
                            <span>TODO: Cat</span>
                        </div>
                        <a href="post-details.html"><h4>TODO: Name Post</h4></a>
                        <ul class="post-info">
                            <li><a href="#">TODO: Date</a></li>
                            <li><a href="#">TODO: Views</a></li>
                            <li><a href="#">TODO: Comments</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <!-- Banner Ends Here -->

    <!-- Main - Change Here -->
    @yield('Main')
    <!-- Main - Change Here -->
    
    <!-- Footer Here -->
    <footer>
        <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="social-icons">
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Behance</a></li>
                    <li><a href="#">Linkedin</a></li>
                    <li><a href="#">Dribbble</a></li>
                </ul>
            </div>
            <div class="col-lg-12">
                <div class="copyright-text">
                    <p>Copyright 2020 Stand Blog Co. | Design: <a rel="nofollow" href="https://templatemo.com" target="_parent">TemplateMo</a></p>
                </div>
            </div>
        </div>
        </div>
    </footer>  
    <!-- Footer End Here -->


    <!-- Add script Here -->
    @yield('Script')
    <!-- Add script Here -->

    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('Blog_resources/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('Blog_resources/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Additional Scripts -->
    <script src="{{ asset('Blog_resources/js/custom.js') }}"></script>
    <script src="{{ asset('Blog_resources/js/owl.js') }}"></script>
    <script src="{{ asset('Blog_resources/js/slick.js') }}"></script>
    <script src="{{ asset('Blog_resources/js/isotope.js') }}"></script>
    <script src="{{ asset('Blog_resources/js/accordions.js') }}"></script>

    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>

  </body>
</html>
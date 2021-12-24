<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900"
        rel="stylesheet">

    <title>URND</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/fontawesome.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/templatemo-grad-school.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/owl.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/lightbox.css">

</head>

<body>


    <!--header-->
    <header class="main-header clearfix" role="header">
        <div class="logo">
            <a href="#"><em>URND</em></a>
        </div>
        <a href="" class="menu-link"><i class="fa fa-bars"></i></a>
        <nav id="menu" class="main-nav" role="navigation">
            <ul class="main-menu">
                <li><a href="/">Home</a></li>
                <li><a href="{{ asset('login') }}">Login</a> </li>
            </ul>
        </nav>
    </header>

    <!-- ***** Main Banner Area Start ***** -->
    <section class="section main-banner" id="top" data-section="section1">
        <video autoplay muted loop id="bg-video">
            <source src="{{ asset('frontend') }}/assets/images/course-video.mp4" type="video/mp4" />
        </video>

        <div class="video-overlay header-text">
            <div class="caption">
                <!-- <h6>Project Website</h6> -->
                <h2><em>UNITEN R&D</em> web-based system</h2>
                <h6> Managing research and consultancy projects.</h6>
            </div>
        </div>
    </section>
    <!-- ***** Main Banner Area End ***** -->


    <section class="features">
        <div class="container">
            <div class="row">

            </div>
        </div>
    </section>


    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p><i class="fa fa-copyright"></i> Copyright {{date('Y')}} by URND</p>

                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('frontend') }}/vendor/jquery/jquery.min.js"></script>
    <script src="{{ asset('frontend') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="{{ asset('frontend') }}/assets/js/isotope.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/owl-carousel.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/lightbox.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/tabs.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/video.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/slick-slider.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/custom.js"></script>
</body>

</html>

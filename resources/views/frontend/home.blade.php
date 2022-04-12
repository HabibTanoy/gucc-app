<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width="device-width,initial-scale=1.0">
    <title>Gucc</title>
    <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet"   href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">
        <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body>
<section class="header">
    <nav>
        <a href="index.html"><img src="{{ asset('frontend/images/logo.png') }}"></a>
        <div class="nav-links" id="navLinks">
            <i class="fa fa-times"onclick="hideMenu()"></i>

            <ul><li><a href="">Home</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Gucc</a></li>
                <li><a href="">Programming tutorials</a> <!-----change--->
                    <ul>
                        <li><a href="">C</a></li>
                        <li><a href="">Java</a></li>
                        <li><a href="">Python</a></li>
                        <li><a href="">Php</a></li>
                    </ul></li>
                <li><a href="">Web-programming</a></li>
                <li><a href="">Drop-Portfolio</a></li>
                <li><a href="{{route('login')}}">SignUp/Login</a></li>
                <li><a href="">Contact</a></li>
            </ul></div>
        <i class="fa fa-bars" onclick="showMenu()"></i>

    </nav>
    <div class="text-box">
        <h1>About this website</h1>
        <p>
            This website is basically design as the helping hand of the Gub students
        </p><a href="" class="here-btn">Visit this website to know more</a>
    </div>
    <!-----login-signup--->


</section>
<!-------service(2)------>

{{--<section class="service">--}}
{{--    <h1>Service we provide</h1>--}}
{{--    <P>In this website we provide multiple service</P>--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            @foreach($services as $service)--}}
{{--                <div class="service-col col-lg-4 col-md-6" width="18rem" data-wow-delay="0.3s">--}}
{{--                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">--}}
{{--                        <h3 class="mb-3">{{$service->card_title}}</h3>--}}
{{--                        <p class="m-0">{{$service->card_body_details}}</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            @endforeach--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}

<!-- Service Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h1 style="font-weight: bold">Service we provide</h1>
{{--            <h1 class="mb-0">Custom IT Solutions for Your Successful Business</h1>--}}
        </div>
        <div class="row g-5">
            @foreach($services as $service)
                <div class="mb-5 col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <h4 class="mb-3">{{$service->card_title}}</h4>
                        <p class="m-0">{{$service->card_body_details}}</p>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Service End -->

<!----club---->
<section class="club">
    <h1>
        GUCC
    </h1>

    <p>Green university computer club</p>
    <div class="row">
        <div class="club-col">
            <img src="images/gucc.png">
            <div class="layer">
                <h3>GUCC</h3>
            </div>
        </div>
    </div>

</section>
<!-----facilities---->
<section class="facilities">
    <h1>Our facilities</h1>
    <p>lorem emsum dollar,connetc han tan bla bla</p>
    <div class="row">
        <div class="facilities-col">
            <img src="images/library.png">
            <h3>World class library</h3>
            <p>lorem usom dollarjshkks xjmdxnchh</p>


        </div>
        <div class="facilities-col">
            <img src="images/basketball.png">
            <h3>largest playground</h3>
            <p>lorem usom dollarjshkks xjmdxnchh</p>


        </div>
        <div class="facilities-col">
            <img src="images/cafeteria.png">
            <h3>tasty food</h3>
            <p>lorem usom dollarjshkks xjmdxnchh</p>


        </div>
    </div>

</section>
<!---call to action---->
<section class="cta">
    <h1>Connected with us  <br>for sharing and gaining knowledge</h1>
    <a href="" class="here-btn">CONTACT US
    </a>


</section>

<!---footer--->
<section class="footer">
    <h4>About us</h4>
    <p>gsjdemek jdhjedkedeemdk jdjej lddnjr</p>
    <div class="icons">
        <i class="fa fa-facebook"></i>
        <i class="fa fa-twitter"></i>
        <i class="fa fa-instagram"></i>
        <i class="fa fa-linkedin"></i>
    </div>
    <p> Made with <i class="fa fa-heart-o"></i>By Md Rakibul Islam & Awal H Mojumdar</p>

</section>


<!----------javascript for toggle menu------->
{{--<script>--}}
{{--    var navLinks=document.getElementById("navLinks");--}}
{{--    function showMenu(){--}}
{{--        navLinks.style.right="0";--}}
{{--    }--}}
{{--    function hideMenu(){--}}
{{--        navLinks.style.right="-200px";--}}
{{--</script>--}}

</body>
</html>

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
        <a href="{{route('frontend')}}">
            <img src="{{ asset('frontend/images/logo.png') }}">
        </a>
        <div class="nav-links" id="navLinks">
            <ul><li><a href="{{route('frontend')}}">Home</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Gucc</a></li>
                <li><a href="{{route('tutorial-program')}}">Programming tutorials</a>
                    <ul>
                        <li><a href="">C</a></li>
                        <li><a href="">Java</a></li>
                        <li><a href="">Python</a></li>
                        <li><a href="">Php</a></li>
                    </ul></li>
                <li><a href="{{route('cv-list')}}">Portfolio List</a></li>
                <li><a href="{{route('portfolio')}}">Drop-Portfolio</a></li>
                @if(Auth::check())
                    <li><a href="{{route('logout')}}">Logout</a></li>
                @else
                    <li><a href="{{route('login')}}">Login</a></li>
                @endif
                <li><a href="">Contact</a></li>
            </ul></div>
    </nav>
    <div class="text-box">
        <h1>About this website</h1>
        <p>
            This website is basically design as the helping hand of the Gub students
        </p><a href="https://green.edu.bd" target="_blank" style="text-decoration: none" class="here-btn">Visit this website to know more</a>
    </div>
    <!-----login-signup--->
</section>

<section class="service" style="width: 100%;">
    <h1>Service we provide</h1>
    <p>In this website we provide multiple service</p>
    <div class="container">
        <div class="row">
            @foreach($services as $service)
            <div class="col col-md-4">
                <div class="service-col">
                    <h3>{{$service->card_title}}</h3>
                    <p>{{$service->card_body_details}}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!----club---->
<section class="club">
    <h1>
        GUCC
    </h1>

    <p>Green university computer club</p>
    <div class="row">
        <div class="club-col">
            <img src="{{asset('frontend/images/gucc.png')}}">
            <div class="layer">
            </div>
        </div>
    </div>

</section>
<!-----facilities---->
<section class="facilities">
    <div class="container">
        <h1>Our facilities</h1>
        <p>lorem emsum dollar,connetc han tan bla bla</p>
        <div class="row">
            @foreach($facilities as $facility)
            <div class="col col-lg-4">
                <div class="card h-100 border-0 facilities-col">
                    <img src="{{URL::asset($facility->image) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h3 class="card-title">{{$facility->card_title}}</h3>
                        <p class="card-text">{{$facility->card_body_details}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

</section>
<!---call to action---->
<section class="cta">
    <h1>Connected with us  br>for sharing and gaining knowledge</h1>
    <a href="" class="here-btn">CONTACT US
    </a>
</section>

<!---footer--->
<section>
    <footer class="bg-info p-5">
        <div class="container">
            <div class="row">
                <div class="col col-lg-4 text-center pt-5">
                    <h3>Green University Support</h3>
                    <p class="text-center">Here's goes something about this web</p>
                </div>
                <div class="col col-lg-4 text-center pt-5">
                    <h4>About us</h4>
                    <p>Made with</p>
                    <h6>Md Rakibul Islam & Awal H Mojumdar</h6>
                </div>
                <div class="col col-lg-4 text-center pt-5">
                    <h4>Contact Info</h4>
                    <p><i class="fas fa-phone me-2"></i>017XXXXXXXX</p>
                    <p><i class="fas fa-phone me-2"></i>017XXXXXXXX</p>
                    <div class="d-flex justify-content-center align-items-center text-center">
                        <h6>Find us on:</h6>
                        <h6 class="p-2">
                            <i class="fa fa-facebook-official me-1" aria-hidden="true"></i>
                            <i class="fa fa-instagram me-1" aria-hidden="true"></i>
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</section>

</body>
</html>

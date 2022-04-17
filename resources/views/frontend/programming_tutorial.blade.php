<!DOCTYPE html>
<html lang="en">
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
{{--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">--}}
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    {{--    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>--}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet"   href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<header>
    <nav class="nav-deco">
        <a href="{{route('frontend')}}">
            <img src="{{ asset('frontend/images/logo.png') }}">
        </a>
        <div class="nav-links" id="navLinks">
            <ul><li><a href="{{route('frontend')}}">Home</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Gucc</a></li>
                <li><a href="{{route('tutorial-program')}}">Programming tutorials</a>
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
</header>
<section>
    <div class="container mx-auto">
        <h1 class="text-center m-5 title-deco fw-bold">Programming Tutorial</h1>
        <section>
            <div class="container">
                <div class="row">
                    <h2 class="text-center text-success fw-bold">HTML</h2>
                    @foreach($tutorial_html as $html)
                    <div class="col col-lg-8 mx-auto">
                        <a class="text-decoration-none text-center" href="{{route('video', $html->id)}}">
                            <div class="service-col">
                                <h5>{{$html->title}}</h5>
                                <p>{{$html->body_details}}</p>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
                <div class="row">
                    <h2 class="text-center text-success fw-bold">Javascript</h2>
                    @foreach($tutorial_js as $js)
                        <div class="col col-lg-8 mx-auto">
                            <a class="text-decoration-none text-center" href="{{route('video', $js->id)}}">
                                <div class="service-col">
                                    <h5>{{$js->title}}</h5>
                                    <p>{{$js->body_details}}</p>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                <div class="row">
                    <h2 class="text-center text-success fw-bold">CSS</h2>
                    @foreach($tutorial_css as $css)
                        <div class="col col-lg-8 mx-auto">
                            <a class="text-decoration-none text-center" href="{{route('video', $css->id)}}">
                                <div class="service-col">
                                    <h5>{{$css->title}}</h5>
                                    <p>{{$css->body_details}}</p>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                <div class="row">
                    <h2 class="text-center text-success fw-bold">Bootstrap</h2>
                    @foreach($tutorial_bootstrap as $bootstrap)
                        <div class="col col-lg-8 mx-auto">
                            <a class="text-decoration-none text-center" href="{{route('video', $bootstrap->id)}}">
                                <div class="service-col">
                                    <h5>{{$bootstrap->title}}</h5>
                                    <p>{{$bootstrap->body_details}}</p>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

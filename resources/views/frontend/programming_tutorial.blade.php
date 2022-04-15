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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    {{--    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>--}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet"   href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<header>
    <nav class="nav-deco">
        <a href="{{route('frontend')}}">
            <img src="{{ asset('frontend/images/logo.png') }}">
        </a>
        <div class="nav-links" id="navLinks">
            <ul><li><a href="{{route('frontend')}}">Home</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Gucc</a></li>
                <li><a href="{{route('cv-drop')}}">Programming tutorials</a>
                    <ul>
                        <li><a href="">C</a></li>
                        <li><a href="">Java</a></li>
                        <li><a href="">Python</a></li>
                        <li><a href="">Php</a></li>
                    </ul></li>
                <li><a href="">Web-programming</a></li>
                <li><a href="{{route('portfolio')}}">Drop-Portfolio</a></li>
                <li><a href="{{route('login')}}">SignUp/Login</a></li>
                <li><a href="">Contact</a></li>
            </ul></div>
    </nav>
</header>
<body>
<section>
    <div class="container">
        <h1 class="text-center m-5 title-deco fw-bold">Programming Tutorial</h1>
        <div class="row row-cols-3">
            <div class="col">
                <div class="list-group">
                    <h3 class="text-center my-3">Java</h3>
                    <a href="" class="mb-3 list-group-item list-group-item-action service-col" aria-current="true">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1 fw-bold">Title-1</h5>
                            <small>3 days ago</small>
                        </div>
                        <p class="mb-1">Something about video.</p>
                    </a>
                    <a href="vid.html" class="mb-3 list-group-item list-group-item-action service-col">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1 fw-bold">Title-2</h5>
                            <small class="text-muted">3 days ago</small>
                        </div>
                        <p class="mb-1">Something about video.</p>
                    </a>
                    <a href="vid.html" class="list-group-item list-group-item-action service-col">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1 fw-bold">Title-3</h5>
                            <small class="text-muted">3 days ago</small>
                        </div>
                        <p class="mb-1">Something about video.</p>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="list-group">
                    <h3 class="text-center my-3">Python</h3>
                    <a href="vid.html" class="mb-3 list-group-item list-group-item-action service-col" aria-current="true">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1 fw-bold">Title-1</h5>
                            <small>3 days ago</small>
                        </div>
                        <p class="mb-1">Something about video.</p>
                    </a>
                    <a href="vid.html" class="mb-3 list-group-item list-group-item-action service-col">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1 fw-bold">Title-2</h5>
                            <small class="text-muted">3 days ago</small>
                        </div>
                        <p class="mb-1">Something about video.</p>
                    </a>
                    <a href="vid.html" class="list-group-item list-group-item-action service-col">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1 fw-bold">Title-3</h5>
                            <small class="text-muted">3 days ago</small>
                        </div>
                        <p class="mb-1">Something about video.</p>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="list-group">
                    <h3 class="text-center my-3">C++</h3>
                    <a href="vid.html" class="mb-3 list-group-item list-group-item-action service-col" aria-current="true">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1 fw-bold">Title-1</h5>
                            <small>3 days ago</small>
                        </div>
                        <p class="mb-1">Something about video.</p>
                    </a>
                    <a href="vid.html" class="mb-3 list-group-item list-group-item-action service-col">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1 fw-bold">Title-2</h5>
                            <small class="text-muted">3 days ago</small>
                        </div>
                        <p class="mb-1">Something about video.</p>
                    </a>
                    <a href="vid.html" class="list-group-item list-group-item-action service-col">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1 fw-bold">Title-3</h5>
                            <small class="text-muted">3 days ago</small>
                        </div>
                        <p class="mb-1">Something about video.</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>

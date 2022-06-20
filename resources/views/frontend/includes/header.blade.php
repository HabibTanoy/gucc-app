<!-- header -->
<header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center">

        <a class="navbar-brand logo" href="/"><img src="{{ asset('frontend/images/Logo.png') }}" alt="image"></a>

        <nav id="navbar" class="navbar ms-auto">
            <ul>
                <!-- about -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        About
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{route('acc')}}">About ACC</a></li>
                        <li><a class="dropdown-item" href="{{route('rules')}}">Rules & Regulations</a></li>
                        <li><a class="dropdown-item" href="{{route('policy')}}">Intimidation Policy</a></li>
                    </ul>
                </li>
                <!-- people -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        People
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{route('osa')}}">OSA</a></li>
                        <li><a class="dropdown-item" href="{{route('founder')}}">Founders</a></li>
                        <li><a class="dropdown-item" href="{{route('executive-committee')}}">Executive
                                Committee</a></li>
                        <li><a class="dropdown-item" href="{{route('former-committee')}}">Former Committees</a>
                        </li>
                        <li><a class="dropdown-item" href="{{route('advisor')}}">Advisors</a></li>
                    </ul>
                </li>
                <!-- Activities & News -->
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{route('activities-news')}}">Activities &
                        News</a>
                </li>
                <!-- Events -->
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{route('events')}}">Events</a>
                </li>
                <!-- media -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        Media
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{route('gallery')}}">Gallery</a></li>
                        <li><a class="dropdown-item" href="{{route('media-coverage')}}">Media Coverage</a></li>
                    </ul>
                </li>
                <!-- Resume -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        Resume
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{route('portfolio')}}">Add Resume</a></li>
                        <li><a class="dropdown-item" href="{{route('cv-list')}}">List of Resume</a></li>
                    </ul>
                </li>
                <!--video tutorial-->
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{route('tutorial-program')}}">Tutorial</a>
                </li>
                <!--blogs-->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        Blogs
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{route('create-blogs')}}">Add Blogs</a></li>
                        <li><a class="dropdown-item" href="{{route('blog-list')}}">List of Blogs</a></li>
                    </ul>
                </li>
                <!-- gub link -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        Gub Quick Links
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="http://payment.green.edu.bd/">Gub payment</a></li>
                        <li><a class="dropdown-item" href="https://studentportal.green.edu.bd/Account/login?ReturnUrl=%2F">Students Portal</a></li>
                        <li><a class="dropdown-item" href="https://library.green.edu.bd/">Library</a></li>
                        <li><a class="dropdown-item" href="https://forms.green.edu.bd/registration-slip/">Registration Slip</a></li>
                        <li><a class="dropdown-item" href="https://applyonline.green.edu.bd/Admission/Home.aspx">Gub Online Apply</a></li>
                    </ul>
                </li>
                <!-- contact -->
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{route('contact')}}">Contact</a>
                </li>
{{--                @if(Auth::check())--}}
{{--                    <li><a href="{{route('logout')}}">Logout</a></li>--}}
{{--                @else--}}
{{--                    <li><a href="{{route('login')}}">Login</a></li>--}}
{{--                @endif--}}
            </ul>
        </nav><!-- .navbar -->

    </div>

</header>

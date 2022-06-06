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
                        <li><a class="dropdown-item" href="./pages/about.html">About ACC</a></li>
                        <li><a class="dropdown-item" href="./pages/rules.html">Rules & Regulations</a></li>
                        <li><a class="dropdown-item" href="./pages/policy.html">Intimidation Policy</a></li>
                    </ul>
                </li>
                <!-- people -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        People
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="./pages/osa.html">OSA</a></li>
                        <li><a class="dropdown-item" href="./pages/founders.html">Founders</a></li>
                        <li><a class="dropdown-item" href="./pages/executive-committee.html">Executive
                                Committee</a></li>
                        <li><a class="dropdown-item" href="./pages/former-committees.html">Former Committees</a>
                        </li>
                        <li><a class="dropdown-item" href="./pages/advisors.html">Advisors</a></li>
                    </ul>
                </li>
                <!-- Activities & News -->
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="./pages/activity-news.html">Activities &
                        News</a>
                </li>
                <!-- Events -->
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="./pages/events.html">Events</a>
                </li>
                <!-- meadia -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        Media
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="../pages/gallery.html">Gallery</a></li>
                        <li><a class="dropdown-item" href="../pages/media-coverage.html">Media Coverage</a></li>
                    </ul>
                </li>
                <!-- contact -->
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="./pages/contact.html">Contact</a>
                </li>
            </ul>
        </nav><!-- .navbar -->

        <div class="position-relative ms-5">

            <a href="#" class="mx-2 js-search-open"><i class="fa-solid fa-magnifying-glass"></i></a>

            <i class="fa-solid fa-bars-staggered mobile-nav-toggle"></i>

            <!-- ======= Search Form ======= -->
            <div class="search-form-wrap js-search-form-wrap">
                <form action="search-result.html" class="search-form">
                    <i class="icon fa-solid fa-magnifying-glass"></i>
                    <input type="text" placeholder="Search" class="form-control">
                    <button class="btn js-search-close"><i class="fa-solid fa-xmark"></i></button>
                </form>
            </div><!-- End Search Form -->

        </div>

    </div>

</header>

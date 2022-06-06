@extends('frontend.master')
@section('content')
    <!-- slider -->
    <!-- Swiper -->
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="./images/image (1).jpg" alt="image">
            </div>
            <div class="swiper-slide">
                <img src="./images/image (3).png" alt="image">
            </div>
            <div class="swiper-slide">
                <img src="./images/image (18).jpg" alt="image">
            </div>
            <div class="swiper-slide">
                <img src="./images/image (17).jpg" alt="image">
            </div>
            <div class="swiper-slide">
                <img src="./images/image (19).jpg" alt="image">
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>





    <!-- main -->
    <main>

        <!-- about -->
        <section class="bg-white">
            <div class="container">
                <div class="row flex-reverse align-items-center">

                    <!-- about text -->
                    <div class="col-md-6">
                        <h6>ABOUT</h6>
                        <h1>AIUB Computer Club</h1>
                        <p>
                            The journey of AIUB Computer Club (ACC) started on 13th September 2012 with authorization
                            from
                            the Office of Student Affairs (OSA) of AIUB. Realizing the key importance to adapt along
                            with
                            upgrading technology, six chief founding members introduced this club with its mission and
                            vision all set. The goal was to build up a strong community of AIUB students by offering
                            them a
                            potential platform that deals with technology and its advancement. AIUB Computer Club holds
                            a
                            high status as one of the most inspiring and admiring clubs in American International
                            University-Bangladesh. They have organized many national and intra club events,
                            nevertheless,
                            among them, events like Computer Science Festival, Cyber Gaming Festival, and Jarvis – Intra
                            ACC
                            Carnival brought its biggest achievement and appreciation.
                        </p>
                    </div>

                    <!-- about image -->
                    <div class="col-md-6">
                        <img class="img-fluid" src="./images/image (3).png" alt="">
                    </div>


                </div> <!-- row -->
            </div> <!-- container -->
        </section> <!-- end about -->

        <!-- why join about club -->
        <section class="bg-white">
            <div class="container">
                <div class="row gy-4">

                    <!-- title -->
                    <div class="col-12">
                        <h1 class="text-center mb-5">Why Join AIUB Computer Club?</h1>
                    </div>

                    <!-- card -->
                    <div class="col-12 col-md-4">
                        <div class="card py-5">
                            <i style="font-size: 50px" class="fa-solid fa-people-group card-img-top text-center"></i>
                            <div class="card-body">
                                <p class="card-text text-center">
                                    To build skills in various sectors including Content Writing, Photojournalism, Video
                                    Editing, Event Organizing, Volunteering, Development, UI/UX Design, and Graphic
                                    Design.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- card -->
                    <div class="col-12 col-md-4">
                        <div class="card py-5">
                            <i style="font-size: 50px" class="fa-solid fa-people-group card-img-top text-center"></i>
                            <div class="card-body">
                                <p class="card-text text-center">
                                    To build skills in various sectors including Content Writing, Photojournalism, Video
                                    Editing, Event Organizing, Volunteering, Development, UI/UX Design, and Graphic
                                    Design.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- card -->
                    <div class="col-12 col-md-4">
                        <div class="card py-5">
                            <i style="font-size: 50px" class="fa-solid fa-people-group card-img-top text-center"></i>
                            <div class="card-body">
                                <p class="card-text text-center">
                                    To build skills in various sectors including Content Writing, Photojournalism, Video
                                    Editing, Event Organizing, Volunteering, Development, UI/UX Design, and Graphic
                                    Design.
                                </p>
                            </div>
                        </div>
                    </div>

                </div> <!-- row -->
            </div> <!-- container -->
        </section> <!-- why join about club -->


        <!-- our events -->
        <section class="bg-yellow">
            <div class="container">
                <div class="row gy-4">

                    <!-- title -->
                    <div class="col-12">
                        <h1 class="text-center mb-5">Our Events</h1>
                    </div>

                    <!-- card -->
                    <div class="col-12 col-md-4">
                        <a href="#">
                            <div class="event">
                                <img class="rounded" src="./images//image (17).jpg" alt="image">
                                <p>CS FEST</p>
                                <div class="overlay rounded"></div>
                            </div>
                        </a>
                    </div>

                    <!-- card -->
                    <div class="col-12 col-md-4">
                        <a href="#">
                            <div class="event">
                                <img class="rounded" src="./images//image (18).jpg" alt="image">
                                <p>CS FEST</p>
                                <div class="overlay rounded"></div>
                            </div>
                        </a>
                    </div>

                    <!-- card -->
                    <div class="col-12 col-md-4">
                        <a href="#">
                            <div class="event">
                                <img class="rounded" src="./images//image (19).jpg" alt="image">
                                <p>CS FEST</p>
                                <div class="overlay rounded"></div>
                            </div>
                        </a>
                    </div>


                    <!-- button -->
                    <div class="col-12">
                        <div class="d-flex justify-content-center">
                            <a class="btn btn-primary mt-4" href="">CHECKOUT MORE OF EVENTS</a>
                        </div>
                    </div>


                </div> <!-- row -->
            </div> <!-- container -->
        </section> <!-- end of our events -->

        <!-- recent news -->
        <section class="bg-white">
            <div class="container">
                <div class="row gy-4">

                    <!-- title -->
                    <div class="col-12">
                        <h1 class="text-center mb-5">Recent News</h1>
                    </div>

                    <!-- card -->
                    <div class="col-12 col-md-4">
                        <div class="card news">
                            <img src="./images/image (1).jpg" style="height:250px" class="card-img-top" alt="image">
                            <div class="card-body">
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                <h5 class="card-title">AIUB Computer Club Arranged a Webinar on Blockchain, Cryptos and
                                    NFTs
                                </h5>
                                <p class="card-text">
                                    A webinar on ‘Blockchain, Cryptos and NFTs – How they
                                </p>
                                <div class="text-center">
                                    <a href="./pages/details/recent-news.html" class="btn btn-primary">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- card -->
                    <div class="col-12 col-md-4">
                        <div class="card news">
                            <img src="./images/image (1).jpg" style="height:250px" class="card-img-top" alt="image">
                            <div class="card-body">
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                <h5 class="card-title">AIUB Computer Club Arranged a Webinar on Blockchain, Cryptos and
                                    NFTs
                                </h5>
                                <p class="card-text">
                                    A webinar on ‘Blockchain, Cryptos and NFTs – How they
                                </p>
                                <div class="text-center">
                                    <a href="./pages/details/recent-news.html" class="btn btn-primary">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- card -->
                    <div class="col-12 col-md-4">
                        <div class="card news">
                            <img src="./images/image (1).jpg" style="height:250px" class="card-img-top" alt="image">
                            <div class="card-body">
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                <h5 class="card-title">AIUB Computer Club Arranged a Webinar on Blockchain, Cryptos and
                                    NFTs
                                </h5>
                                <p class="card-text">
                                    A webinar on ‘Blockchain, Cryptos and NFTs – How they
                                </p>
                                <div class="text-center">
                                    <a href="./pages/details/recent-news.html" class="btn btn-primary">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>


                </div> <!-- row -->
            </div> <!-- container -->
        </section> <!-- recent news -->



        <!-- counter -->
        <section class="bg-blue">
            <div class="container">
                <div class="row gy-4">

                    <!-- counter box -->
                    <div class="col-12 col-md-3">
                        <div class="counter">
                            <h3 class="text-white text-center">150+</h3>
                            <p class="text-white text-center">CURRENT MEMBERS</p>
                        </div>
                    </div>

                    <!-- counter box -->
                    <div class="col-12 col-md-3">
                        <div class="counter">
                            <h3 class="text-white text-center">150+</h3>
                            <p class="text-white text-center">CURRENT MEMBERS</p>
                        </div>
                    </div>

                    <!-- counter box -->
                    <div class="col-12 col-md-3">
                        <div class="counter">
                            <h3 class="text-white text-center">150+</h3>
                            <p class="text-white text-center">CURRENT MEMBERS</p>
                        </div>
                    </div>

                    <!-- counter box -->
                    <div class="col-12 col-md-3">
                        <div class="counter">
                            <h3 class="text-white text-center">150+</h3>
                            <p class="text-white text-center">CURRENT MEMBERS</p>
                        </div>
                    </div>

                </div> <!-- row -->
            </div> <!-- container -->
        </section> <!-- counter -->


        <!-- our teams -->
        <section class="bg-white">
            <div class="container">
                <div class="row gy-4 mx-0 mx-md-5">

                    <!-- title -->
                    <div class="col-12">
                        <h1 class="text-center mb-5">Our Teams</h1>
                    </div>

                    <!-- card -->
                    <div class="col-12 col-md-4">
                        <div class="team rounded">
                            <img class="rounded" src="./images//image (1).jpg" alt="image">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="text-center mb-4">
                                    <i class="fa-solid fa-code text-white"></i>
                                </div>
                                <h4 class="text-center text-white mb-4">ACC Development Team</h4>
                                <div class="text-center">
                                    <a href="../../pages/details/team.html" class="btn btn-primary">Load More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- card -->
                    <div class="col-12 col-md-4">
                        <div class="team rounded">
                            <img class="rounded" src="./images//image (1).jpg" alt="image">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="text-center mb-4">
                                    <i class="fa-solid fa-code text-white"></i>
                                </div>
                                <h4 class="text-center text-white mb-4">ACC Development Team</h4>
                                <div class="text-center">
                                    <a href="../../pages/details/team.html" class="btn btn-primary">Load More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- card -->
                    <div class="col-12 col-md-4">
                        <div class="team rounded">
                            <img class="rounded" src="./images//image (1).jpg" alt="image">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="text-center mb-4">
                                    <i class="fa-solid fa-code text-white"></i>
                                </div>
                                <h4 class="text-center text-white mb-4">ACC Development Team</h4>
                                <div class="text-center">
                                    <a href="../../pages/details/team.html" class="btn btn-primary">Load More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- card -->
                    <div class="col-12 col-md-4">
                        <div class="team rounded">
                            <img class="rounded" src="./images//image (1).jpg" alt="image">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="text-center mb-4">
                                    <i class="fa-solid fa-code text-white"></i>
                                </div>
                                <h4 class="text-center text-white mb-4">ACC Development Team</h4>
                                <div class="text-center">
                                    <a href="../../pages/details/team.html" class="btn btn-primary">Load More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- card -->
                    <div class="col-12 col-md-4">
                        <div class="team rounded">
                            <img class="rounded" src="./images//image (1).jpg" alt="image">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="text-center mb-4">
                                    <i class="fa-solid fa-code text-white"></i>
                                </div>
                                <h4 class="text-center text-white mb-4">ACC Development Team</h4>
                                <div class="text-center">
                                    <a href="../../pages/details/team.html" class="btn btn-primary">Load More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- card -->
                    <div class="col-12 col-md-4">
                        <div class="team rounded">
                            <img class="rounded" src="./images//image (1).jpg" alt="image">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="text-center mb-4">
                                    <i class="fa-solid fa-code text-white"></i>
                                </div>
                                <h4 class="text-center text-white mb-4">ACC Development Team</h4>
                                <div class="text-center">
                                    <a href="../../pages/details/team.html" class="btn btn-primary">Load More</a>
                                </div>
                            </div>
                        </div>
                    </div>


                </div> <!-- row -->
            </div> <!-- container -->
        </section> <!-- our teams -->


        <!-- social media follow -->
        <section class="bg-yellow">
            <div class="container">
                <div class="row gy-4">

                    <!-- social box -->
                    <div class="col-12 col-md-4">
                        <div class="social">
                            <h6 class="text-center">Like Us On Facebook</h6>
                            <div class="social-icon text-center">
                                <a href=""><i class="fa-brands fa-facebook text-facebook"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- social box -->
                    <div class="col-12 col-md-4">
                        <div class="social">
                            <h6 class="text-center">Like Us On LinkedIn</h6>
                            <div class="social-icon text-center">
                                <a href=""><i class="fa-brands fa-linkedin text-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- social box -->
                    <div class="col-12 col-md-4">
                        <div class="social">
                            <h6 class="text-center">Like Us On Youtube</h6>
                            <div class="social-icon text-center">
                                <a href=""><i class="fa-brands fa-youtube text-youtube"></i></a>
                            </div>
                        </div>
                    </div>

                </div> <!-- row -->
            </div> <!-- container -->
        </section> <!-- social media follow -->


        <!-- contact -->
        <section class="bg-white" id="#contact">
            <div class="container">
                <div class="row align-items-center gy-4 flex-column-reverse flex-md-row">
                    <div class="col-12 col-md-6">
                        <div style="width: 100%">
                            <iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0"
                                    marginwidth="0"
                                    src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Malet%20St,%20London%20WC1E%207HU,%20United%20Kingdom+(Your%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
                                <a href="https://www.gps.ie/sport-gps/">fitness tracker</a>
                            </iframe>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 text-center text-md-start">
                        <!-- title -->
                        <h2>GET IN TOUCH</h2>
                        <!-- text block -->
                        <div>
                            <h4>Location</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur magni veritatis eos
                                eligendi animi in, atque possimus quaerat eveniet quas.</p>
                        </div>
                        <div>
                            <h4>Contact</h4>
                            <p class="text-primary">
                                <i class="fa-solid fa-envelope"></i>
                                <a class="text-decoration-none" href="mailto:dummy@mail.com">dummy@mail.com</a>
                            </p>
                        </div>

                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </section> <!-- contact -->


    </main> <!-- main -->
@endsection

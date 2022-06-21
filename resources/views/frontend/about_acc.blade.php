@extends('frontend.master')
@section('content')
    <!-- main -->
    <main>
        <!-- navbar bottom heading -->
        <div class="container-fluid g-0">
            <div class="row g-0">
                <div class="col-md-12">
                    <div class="navbar-bottom-heading">
                        <img src="{{ asset('frontend/images/banner1.jpg') }}" alt="image">
                        <div class="overlay"></div>
                        <h1 class="text-center text-white fw-bold">ABOUT US</h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- history -->
        <section class="bg-white">
            <div class="container">
                <div class="row flex-column-reverse flex-md-row align-items-center gy-4">

                    <!-- history image -->
                    <div class="col-md-6">
                        <div class="row gy-4">
                            <div class="col-6">
                                <img class="img-fluid rounded border" src="{{ asset('./frontend/images/image_16.jpg') }}" alt="">
                            </div>
                            <div class="col-6">
                                <div class="row gy-4">
                                    <div class="col-12">
                                        <img class="img-fluid rounded border" src="{{ asset('./frontend/images/image_5.jpg') }}" alt="">
                                    </div>
{{--                                    <div class="col-12">--}}
{{--                                        <img class="img-fluid rounded border" src="{{ asset('./frontend/images/image_6.jpg') }}" alt="">--}}
{{--                                    </div>--}}
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- history text -->
                    <div class="col-md-6">
                        <h6>History</h6>
                        <h1>The Begining</h1>
                        <p>
                            On September 13, 2012 the voyage of GUB Computer Club – GUCC, had commenced. The dream was
                            to set a platform for GUB students to spread out the light of technology, and that dream
                            was seen by six founder members of GUB Computer Club. It started with a mission and vision.
                            GUCC welcome every student of American International University – Bangladesh.
                        </p>
                    </div>

                </div> <!-- end row -->
            </div> <!-- container -->
        </section> <!-- end of history -->


        <!-- celebration -->
        <section class="bg-blue">
            <div class="celebration">
                <img src="{{ asset('frontend/images/banner1.jpg') }}" alt="image" />
                <div class="celebration-text w-75">
                    <p class="text-center text-white">
                        GUCC says to all let’s change yourself, change your society and change the country with your
                        aptitudes. Let’s take the path together and see the power of combined talents.We/GUCC is waiting
                        for you and the world is waiting for us. Explore yourself and be part of success.
                    </p>
                </div>
            </div>
        </section>

        <!-- comunity -->
        <section class="bg-white">
            <div class="container">
                <div class="row align-items-center gy-4">

                    <!-- comunity text -->
                    <div class="col-md-6">
                        <h6>GUCC</h6>
                        <h1>The Community</h1>
                        <p>
                            In continuation, GUCC is now one of the biggest and most successful clubs in American
                            International University-Bangladesh by its different activities over the years ever since
                            the club was started with 60 active members from all different discipline within GUB.
                        </p>
                    </div>

                    <!-- comunity image -->
                    <div class="col-md-6">
                        <div class="row gy-4">
                            <div class="col-6">
                                <img class="img-fluid rounded border" src="{{ asset('./frontend/images/image_2.jpg') }}" alt="">
                            </div>
                            <div class="col-6">
                                <div class="row gy-4">
                                    <div class="col-12">
                                        <img class="img-fluid rounded border" src="{{ asset('./frontend/images/image_8.jpg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div> <!-- end row -->
            </div> <!-- container -->
        </section> <!-- end of comunity -->



        <!-- events and activities -->
        <section class="bg-white">
            <div class="container">
                <div class="row flex-column-reverse flex-md-row align-items-center gy-4">


                    <!-- events and activities image -->
                    <div class="col-md-6">
                        <div class="row g-0">
                            <div class="col-6">
                                <img class="img-fluid" src="{{ asset('./frontend/images/image_7.jpg') }}" alt="">
                            </div>
                            <div class="col-6">
                                <img class="img-fluid" src="{{ asset('./frontend/images/image_15.jpg') }}" alt="">
                            </div>
                            <div class="col-6">
                                <img class="img-fluid" src="../images/image (14).jpg" alt="">
                            </div>
                            <div class="col-6">
                                <img class="img-fluid" src="../images/image (16).jpg" alt="">
                            </div>
                        </div>
                    </div>

                    <!-- events and activities text -->
                    <div class="col-md-6">
                        <h6>Events and Activities</h6>
                        <h1>Our Success</h1>
                        <p>
                            Since GUCC’s inception, GUB Computer Club (GUCC) has devoted to serve GUB’s students with
                            full of its resources and its interests. They have successfully completed many events,
                            however, among them Computer Science Festival,featuring programming contest, gaming contest,
                            idea or concept presentation, application showcasing for mobile, web, and desktop, and
                            networking contest, brought its biggest success and appreciation. GUCC has related with
                            various organizations, for example : Mozilla Bangladesh, Microsoft Student Partner, BASIS
                            Student Forum. with them GUCC organized so many events . GUCC has been active since it
                            started, and it will be organizing such events like these, which are actually related with
                            modern technology and current job market. Being an GUCC member, on the other hand, means
                            privileged with more than just adequate facilities: gaming, participating in dissimilar
                            workshops, for instance, Firefox OS application development, and Android development, and
                            contests at the first place, touring in several places etc.

                        </p>
                    </div>

                </div> <!-- end row -->
            </div> <!-- container -->
        </section> <!-- end of events and activities -->


        <!-- what we did -->

        <!-- why join about club -->
        <section class="bg-blue">
            <div class="container">
                <div class="row gy-4">

                    <!-- title -->
                    <div class="col-12">
                        <h1 class="text-center mb-5 text-white">Why Join our Computer Club?</h1>
                    </div>

                    <!-- card -->
                    <div class="col-12 col-md-4">
                        <div class="card py-5">
                            <i style="font-size: 50px"
                               class="fa-solid fa-people-group card-img-top text-center text-blue"></i>
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
                            <i style="font-size: 50px"
                               class="fa-solid fa-people-group card-img-top text-center text-blue"></i>
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
                            <i style="font-size: 50px"
                               class="fa-solid fa-people-group card-img-top text-center text-blue"></i>
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


        <!-- assets -->
        <section class="bg-white">
            <div class="container">
                <div class="row flex-reverse align-items-center">

                    <!-- assets text -->
                    <div class="col-md-6">
                        <h6>GUCC</h6>
                        <h1>The Assets</h1>
                        <p>
                            With executive bodies and about 70 members, Computer club started moving forward with new
                            segments and ideas. Members are always welcome. Member has full facility to come up with
                            their own ideas on different events and programs. Every single member becomes an important
                            part & Assets of GUCC. on the contrary, in every semester there is something enjoyable
                            moments come into real only for the members like Games, Study tour,Picnic,Party etc.
                        </p>
                    </div>

                    <!-- assets image -->
                    <div class="col-md-6">
                        <img class="img-fluid" src="{{ asset('./frontend/images/image_17.jpg') }}" alt="">
                    </div>


                </div> <!-- row -->
            </div> <!-- container -->
        </section> <!-- end assets -->


        <!-- Mission -->
        <section class="bg-white">
            <div class="container">
                <div class="row flex-column-reverse flex-md-row align-items-center">

                    <!-- Mission image -->
                    <div class="col-md-6">
                        <img class="img-fluid" src="{{ asset('./frontend/images/image_18.jpg') }}" alt="">
                    </div>

                    <!-- Mission text -->
                    <div class="col-md-6">
                        <h6>GUCC</h6>
                        <h1>Our Mission</h1>
                        <p>
                            GUB Computer Club started with a mission committed to its members to introduce them to the
                            ever-changing information and technology world. GUB Computer Club believes one always must
                            stay rationalized if he/she wants to subsist in today’s competitive technology driven world.
                            The club regularly arranges seminars and workshops in this regard to keep its members always
                            updated with the latest knowledge. GUB Computer Club wants to introduce its members to the
                            impending challenges and help them to face it with our unity and communications.

                        </p>
                    </div>


                </div> <!-- row -->
            </div> <!-- container -->
        </section> <!-- end Mission -->


        <!-- vision -->
        <section class="bg-white">
            <div class="container">
                <div class="row flex-reverse align-items-center">

                    <!-- vision text -->
                    <div class="col-md-6">
                        <h6>GUCC</h6>
                        <h1>Our Vission</h1>
                        <p>
                            GUB Computer Club is working with a vision to create leaders in the emerging technology
                            sector. Technology is the next substantial phenomenon that will lead the world towards its
                            future. GUB Computer Club doesn’t want its members only to get ready for the future but
                            wishes to see in leading positions. GUB Computer club wants its members to be a pioneer of
                            the future.
                        </p>
                    </div>

                    <!-- vision image -->
                    <div class="col-md-6">
                        <img class="img-fluid" src="{{ asset('./frontend/images/image_16.jpg') }}" alt="">
                    </div>


                </div> <!-- row -->
            </div> <!-- container -->
        </section> <!-- end vision -->


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
    <!-- Back to top button -->
    <a class="text-decoration-none text-white d-flex align-items-center justify-content-center" id="button">
        <i class="fa-solid fa-circle-arrow-up"></i>
    </a>
@endsection

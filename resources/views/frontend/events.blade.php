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
                        <h1 class="text-center text-white fw-bold">FESTIVALS</h1>
                    </div>
                </div>
            </div>
        </div>
        <section class="bg-white">
            <div class="container">
                <!-- event post -->
                <div class="row gy-md-5 gy-4">

                    <div class="col-12">
                        <div class="row align-items-center flex-md-row flex-column-reverse gy-4">
                            @foreach($events as $event)
                            <!-- text content -->
                            <div class="col-12 col-md-6">
                                <h3>{{$event->card_title}}</h3>
                                <p>{{$event->card_body_details}}</p>
                                <div class="text-center text-md-start">
                                    <a href="#" class="btn btn-outline-primary">VISIT WEBSITE</a>
                                </div>
                            </div>

                            <!-- image -->
                            <div class="col-md-6">
                                <div class="row g-0">
                                    <div class="col-6">
                                        <img class="img-fluid" src="{{URL::asset($event->image)}}" alt="">
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div> <!-- row -->
                    </div> <!-- end of col-12 -->

                    <div class="col-12">
                        <div class="row align-items-center gy-4">

                            <!-- image -->
                            <div class="col-md-6">
                                <div class="row g-0">
                                    <div class="col-6">
                                        <img class="img-fluid" src="{{ asset('frontend/images/image_14.jpg') }}" alt="">
                                    </div>
{{--                                    <div class="col-6">--}}
{{--                                        <img class="img-fluid" src="{{ asset('frontend/images/image_15.jpg') }}" alt="">--}}
{{--                                    </div>--}}
                                    <div class="col-6">
                                        <img class="img-fluid" src="../images/image (14).jpg" alt="">
                                    </div>
                                    <div class="col-6">
                                        <img class="img-fluid" src="../images/image (16).jpg" alt="">
                                    </div>
                                </div>
                            </div>

                            <!-- text content -->
                            <div class="col-12 col-md-6">
                                <h3>CYBER GAMING FEST</h3>
                                <p>
                                    GUB Cyber Gaming Fest is a national event organized by ACC. The event focuses on
                                    the gamers of various schools and colleges along with the students of GUB. Students
                                    from all over the country come to take part in this signature ACC event. The game
                                    sections get loaded up with most mainstream games, for example, CS: GO, DOTA 2,
                                    FIFA, NFS, VR Game, and some more.
                                </p>
                                <div class="text-center text-md-start">
                                    <a href="#" class="btn btn-outline-primary">VISIT WEBSITE</a>
                                </div>
                            </div>

                        </div> <!-- row -->
                    </div> <!-- end of col-12 -->



                    <div class="col-12">
                        <div class="row align-items-center flex-md-row flex-column-reverse gy-4">

                            <!-- text content -->
                            <div class="col-12 col-md-6">
                                <h3>CS FEST</h3>
                                <p>
                                    GUB CS Fest is one of the biggest and most awaited events organized successfully by
                                    GUB Computer Club (ACC) every year. The national event promotes with the theme:
                                    “Your vision, brought to life” and the theme profoundly connects the event with the
                                    mission and vision of ACC. This occasion is for both the students and faculties of
                                    GUB which brings the institutions together with its celebration by students of
                                    different disciplines, the honorable Vice-Chancellor, Deans, Faculty members, and
                                    Administrative officers.
                                </p>
                                <div class="text-center text-md-start">
                                    <a href="#" class="btn btn-outline-primary">VISIT WEBSITE</a>
                                </div>
                            </div>

                            <!-- image -->
                            <div class="col-md-6">
                                <div class="row g-0">
                                    <div class="col-6">
                                        <img class="img-fluid" src="{{ asset('frontend/images/image_15.jpg') }}" alt="">
                                    </div>
                                    <div class="col-6">
                                        <img class="img-fluid" src="../images/image (15).jpg" alt="">
                                    </div>
                                    <div class="col-6">
                                        <img class="img-fluid" src="../images/image (14).jpg" alt="">
                                    </div>
                                    <div class="col-6">
                                        <img class="img-fluid" src="../images/image (16).jpg" alt="">
                                    </div>
                                </div>
                            </div>

                        </div> <!-- row -->
                    </div> <!-- end of col-12 -->

                    <div class="col-12">
                        <div class="row align-items-center gy-4">

                            <!-- image -->
                            <div class="col-md-6">
                                <div class="row g-0">
                                    <div class="col-6">
                                        <img class="img-fluid" src="{{ asset('frontend/images/image_14.jpg') }}" alt="">
                                    </div>
                                    <div class="col-6">
                                        <img class="img-fluid" src="../images/image (15).jpg" alt="">
                                    </div>
                                    <div class="col-6">
                                        <img class="img-fluid" src="../images/image (14).jpg" alt="">
                                    </div>
                                    <div class="col-6">
                                        <img class="img-fluid" src="../images/image (16).jpg" alt="">
                                    </div>
                                </div>
                            </div>

                            <!-- text content -->
                            <div class="col-12 col-md-6">
                                <h3>CYBER GAMING FEST</h3>
                                <p>
                                    GUB Cyber Gaming Fest is a national event organized by ACC. The event focuses on
                                    the gamers of various schools and colleges along with the students of GUB. Students
                                    from all over the country come to take part in this signature ACC event. The game
                                    sections get loaded up with most mainstream games, for example, CS: GO, DOTA 2,
                                    FIFA, NFS, VR Game, and some more.
                                </p>
                                <div class="text-center text-md-start">
                                    <a href="#" class="btn btn-outline-primary">VISIT WEBSITE</a>
                                </div>
                            </div>

                        </div> <!-- row -->
                    </div> <!-- end of col-12 -->
                </div> <!-- end of event post row -->
            </div> <!-- end of container -->
        </section> <!-- end of event post section -->

        <!-- programs -->
        <section class="bg-blue">

            <!-- title -->
            <h2 class="text-white text-center mb-5">PROGRAMS</h2>

            <!-- programs post -->
            <div class="programs d-flex align-items-center">
                <img src="{{ asset('frontend/images/banner1.jpg') }}"
                     alt="image">
                <div class="overlay"></div>
                <div class="programs-body py-5">
                    <h2 class="text-center text-white">ICCA - INTERNATIONAL CONFERENCE ON COMPUTING
                        ADVANCEMENTS</h2>
                    <p class="text-white">
                        The Department of Computer Science of American International University-Bangladesh
                        (GUB)
                        organized the International Conference on Computing Advancements, ICCA-2020 on
                        January 10 to 12
                        in 2020 at the GUB campus. GUB Computer Club supported the event as its volunteers
                        tirelessly
                        worked to make the event successful. The goal of the ICCA-2020 conference was to
                        bring together
                        a convergence between academics and industry researchers from different domains of
                        computer
                        science. In this conference, many distinguished academics and researchers of
                        computer science
                        from home and abroad participated.
                    </p>
                </div>
            </div>
            <!-- programs post -->
            <div class="programs d-flex align-items-center">
                <img src="{{ asset('frontend/images/banner2.png') }}"
                     alt="image">
                <div class="overlay"></div>
                <div class="programs-body py-5">
                    <h2 class="text-center text-white">CISCO NETWORKING ACADEMY NATIONAL SKILL COMPETITION</h2>
                    <p class="text-white">
                        On February 8, 2020: American International University-Bangladesh (GUB) hosted the 2020 Cisco
                        Networking Academy Skills Competition at its permanent campus which is the largest gathering of
                        its kind. 1000+ students from different colleges and private/public universities participated in
                        the daylong event which tested their skills in the networking and cybersecurity area. Members of
                        GUB Computer Club worked in different sectors of this event.
                    </p>
                </div>
            </div>


        </section>

    </main> <!-- main -->
    <!-- Back to top button -->
    <a class="text-decoration-none text-white d-flex align-items-center justify-content-center" id="button">
        <i class="fa-solid fa-circle-arrow-up"></i>
    </a>
@endsection

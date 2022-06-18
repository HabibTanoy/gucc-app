@extends('frontend.master')
@section('content')
    <!-- main -->
    <main>
        <!-- navbar bottom heading -->
        <div class="container-fluid g-0">
            <div class="row g-0">
                <div class="col-md-12">
                    <div class="team-navbar-bottom-heading">
                        <img src="{{ asset('frontend/images/banner1.jpg') }}" alt="image">
                        <div class="overlay"></div>
                        <h1 class="text-center text-white fw-bold">GUB DESIGN TEAM</h1>
                        <a class="arrow-left" href=""><i class="fa-solid fa-circle-arrow-left"></i></a>
                        <a class="arrow-right" href=""><i class="fa-solid fa-circle-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <section>
            <div class="container mt-5">
                <!-- team lead by -->
                <div class="row mb-4">
                    <div class="col-6 mx-auto">
                        <div class="row gy-4">
                            <div class="col-12 col-md-6">
                                <div class="d-flex team-lead-profile flex-column align-items-center">
                                    <img class="shadow-sm" src="{{ asset('frontend/images/image_15.jpg') }}" alt="image">
                                    <h5 class="fw-bold mt-4 text-center">FULL NAME FULL NAME</h5>
                                    <p class="text-center w-75">Designation Lorem ipsum dolor sit amet.</p>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="d-flex team-lead-profile flex-column align-items-center">
                                    <img class="shadow-sm" src="{{ asset('frontend/images/image_14.jpg') }}" alt="image">
                                    <h5 class="fw-bold mt-4 text-center">FULL NAME FULL NAME</h5>
                                    <p class="text-center w-75">Designation Lorem ipsum dolor sit amet.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- team content -->
                <div class="row mb-4">
                    <div class="col-12">
                        <p>GUB Design is one of the most dynamic sectors that regularly contribute to different
                            activities of GUB Computer Club. Almost every visual we come across in an event or any
                            other activity is the result of the continuous efforts of talented members of GUB Design.
                        </p>
                        <h6>What does GUB Design do?</h6>
                        <ul>
                            <li>Creates banners and posters for any event and workshops</li>
                            <li>Creates banners and posters for any event and workshops</li>
                            <li>Creates banners and posters for any event and workshops</li>
                            <li>Creates banners and posters for any event and workshops</li>
                            <li>Creates banners and posters for any event and workshops</li>
                        </ul>
                        <p>If you believe you are proficient with these skills, GUB Design wholeheartedly welcomes you
                            to the team. Join the team to contribute with your skills.</p>
                    </div>
                </div>
                <!-- team works portfolio -->
                <div class="row">
                    <!-- title -->
                    <div class="col-12">
                        <h3 class="text-center mb-5 fw-bold">OUR WORKS</h3>
                    </div>
                </div>
            </div>
        </section>

    </main> <!-- main -->

@endsection

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
                        <h1 class="text-center text-white fw-bold">ADVISORS</h1>
                    </div>
                </div>
            </div>
        </div>
        <section class="bg-white">
            <div class="container">

                <!-- advisor text -->
                <div class="row">
                    <div class="col-12">
                        <p>
                            GUB Computer Club is consistently appreciative of its establishing individuals. 6
                            individuals took on the initiative and founded a place for the students to call their home.
                            Nothing was incomprehensible for them. Their fruitful endeavor brought ACC into another
                            degree of association where we are accomplishing our goals all over. Without them, we would
                            be not able to reach this position.
                        </p>
                        <p>
                            GUB Computer Club is consistently appreciative of its establishing individuals. 6
                            individuals took on the initiative and founded a place for the students to call their home.
                            Nothing was incomprehensible for them. Their fruitful endeavor brought ACC into another
                            degree of association where we are accomplishing our goals all over. Without them, we would
                            be not able to reach this position.
                        </p>
                    </div>
                </div>

                <!-- advisor members-->

                <!-- multiple profile in a row container -->
                <div class="row align-items-center justify-content-center my-5 gy-5">
                    @foreach($advisors as $advisor)
                    <!-- profile card -->
                    <div class="col-12 col-lg-4">
                        <div class="profile d-flex flex-column align-items-center">
                            <div class="profile-social-icon">
                                <img src="{{URL::asset($advisor->image)}}"
                                     alt="image">
                                <a href="#"><i class="fa-brands fa-linkedin text-white"></i></a>
                                <div class="overlay"></div>
                            </div>
                            <h5 class="fw-bold mt-4 text-center">{{$advisor->card_title}}</h5>
                            <p class="text-center">{{$advisor->card_body_details}}</p>
                        </div>
                    </div>
                    @endforeach

                    @foreach($founders as $founder)
                    <!-- profile card -->
                    <div class="col-12 col-lg-3">
                        <div class="profile d-flex flex-column align-items-center">
                            <div class="profile-social-icon">
                                <img src="{{URL::asset($founder->image)}}"
                                     alt="image">
                                <a href="#"><i class="fa-brands fa-linkedin text-white"></i></a>
                                <div class="overlay"></div>
                            </div>
                            <h5 class="fw-bold mt-4 text-center">{{$founder->card_title}}</h5>
                            <p class="text-center">{{$founder->card_body_details}}</p>
                        </div>
                    </div>
                        @endforeach
                </div>

            </div>
        </section>

    </main> <!-- main -->
    <!-- Back to top button -->
    <a class="text-decoration-none text-white d-flex align-items-center justify-content-center" id="button">
        <i class="fa-solid fa-circle-arrow-up"></i>
    </a>
@endsection

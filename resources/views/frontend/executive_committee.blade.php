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
                        <h1 class="text-center text-white fw-bold">EXECUTIVE COMMITTEE</h1>
                    </div>
                </div>
            </div>
        </div>
        <section class="bg-white">
            <div class="container-fluid">
                @foreach($executive_committees as $executive_committee)
                <!-- single profile in a row container -->
                <div class="row align-items-center justify-content-center my-5">
                    <!-- profile card -->
                    <div class="col-12 col-lg-4">
                        <div class="profile d-flex flex-column align-items-center">
                            <div class="profile-social-icon">
                                <div class="profile-social-icon">
                                    <img src="{{URL::asset($executive_committee->image)}}" alt="image">
                                    <a href="#"><i class="fa-brands fa-linkedin text-white"></i></a>
                                    <div class="overlay"></div>
                                </div>
                                <a href="#"><i class="fa-brands fa-linkedin text-white"></i></a>
                                <div class="overlay"></div>
                            </div>
                            <h5 class="fw-bold mt-4 text-center">{{$executive_committee->card_title}}</h5>
                            <p class="text-center">{{$executive_committee->card_body_details}}</p>
                        </div>
                    </div>
                </div>
                @endforeach

                <!-- multiple profile in a row container -->
                <div class="row align-items-center justify-content-center my-5 gy-5">
                    @foreach($agss as $ags)
                    <!-- profile card -->
                    <div class="col-12 col-lg-2">
                        <div class="profile d-flex flex-column align-items-center">
                            <div class="profile-social-icon">
                                <img src="{{URL::asset($ags->image)}}" alt="image">
                                <a href="#"><i class="fa-brands fa-linkedin text-white"></i></a>
                                <div class="overlay"></div>
                            </div>
                            <h5 class="fw-bold mt-4 text-center">{{$ags->card_title}}</h5>
                            <p class="text-center">{{$ags->card_body_details}}</p>
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

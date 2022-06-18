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
                        <h1 class="text-center text-white fw-bold">ACTIVITIES & NEWS</h1>
                    </div>
                </div>
            </div>
        </div>
        <section class="bg-white">
            <div class="container">

                <!-- activity news -->
                <div class="row g-5">
                    @foreach($activities_news as $activity_news)
                    <!-- card -->
                    <div class="col-12 col-md-4">
                        <div class="card news position-relative">
                            <img src="{{URL::asset($activity_news->image)}}" style="height:250px" class="card-img-top" alt="image">
                            <div class="bg-light-green text-center text-white position-absolute top-0 end-0 m-3 px-2 rounded-pill"
                                 style="font-size: 0.8em;">ACTIVITIES & NEWS</div>
                            <div class="card-body">
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago |
                                        GUB Computer Club</small>
                                </p>
                                <h5 class="card-title">{{$activity_news->card_title}}</h5>
                                <p class="card-text">
                                   {{$activity_news->card_body_details}}
                                </p>
                                <div class="text-center">
                                    <a href="{{route('recent-view')}}" class="btn btn-primary">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div> <!-- row -->

            </div>
        </section>

    </main> <!-- main -->
    <!-- Back to top button -->
    <a class="text-decoration-none text-white d-flex align-items-center justify-content-center" id="button">
        <i class="fa-solid fa-circle-arrow-up"></i>
    </a>
@endsection

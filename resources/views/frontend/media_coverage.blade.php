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
                        <h1 class="text-center text-white fw-bold">MEDIA COVERAGE</h1>
                    </div>
                </div>
            </div>
        </div>
        <section class="bg-white">
            <div class="container">
                <div class="row g-5">
                    @foreach($media_coverages as $media_coverage)
                    <!-- card -->
                    <div class="col-12 col-md-4">
                        <div class="card news position-relative">
                            <img src="{{URL::asset($media_coverage->image)}}" style="height:250px" class="card-img-top" alt="image">
                            <div class="bg-light-green text-center text-white position-absolute top-0 end-0 m-3 px-2 rounded-pill"
                                 style="font-size: 0.8em;">MEDIA COVERAGE</div>
                            <div class="card-body">

                                <h5 class="card-title">{{$media_coverage->card_title}}
                                </h5>
                                <p class="card-text">
                                    {{$media_coverage->card_body_details}}
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

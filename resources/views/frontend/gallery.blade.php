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
                        <h1 class="text-center text-white fw-bold">ACC GALLERY</h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- gallery -->
        <section class="bg-white">
            <div class="container">
                <div class="row gy-4">
                    @foreach($galleries as $gallery)
                    <!-- card -->
                    <div class="col-12 col-md-6">
                        <a href="./details/gallery.html">
                            <div class="event">
                                <img class="rounded" src="{{URL::asset($gallery->image)}}" alt="image">
                                <p>{{$gallery->card_title}}</p>
                                <div class="overlay rounded"></div>
                            </div>
                        </a>
                    </div>
                    @endforeach
{{--                    <!-- card -->--}}
{{--                    <div class="col-12 col-md-6">--}}
{{--                        <a href="./details/gallery.html">--}}
{{--                            <div class="event">--}}
{{--                                <img class="rounded" src="../images//image (18).jpg" alt="image">--}}
{{--                                <p>CS FEST</p>--}}
{{--                                <div class="overlay rounded"></div>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                    </div>--}}

{{--                    <!-- card -->--}}
{{--                    <div class="col-12 col-md-6">--}}
{{--                        <a href="./details/gallery.html">--}}
{{--                            <div class="event">--}}
{{--                                <img class="rounded" src="../images//image (19).jpg" alt="image">--}}
{{--                                <p>CS FEST</p>--}}
{{--                                <div class="overlay rounded"></div>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                    </div>--}}


                </div> <!-- row -->
            </div> <!-- container -->
        </section> <!-- end of gallery -->

    </main> <!-- main -->
    <!-- Back to top button -->
    <a class="text-decoration-none text-white d-flex align-items-center justify-content-center" id="button">
        <i class="fa-solid fa-circle-arrow-up"></i>
    </a>
@endsection

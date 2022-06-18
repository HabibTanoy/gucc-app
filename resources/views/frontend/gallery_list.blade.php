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
                    <h1 class="text-center text-white fw-bold">CS FEST</h1>
                    <a class="arrow-left" href=""><i class="fa-solid fa-circle-arrow-left"></i></a>
                    <a class="arrow-right" href=""><i class="fa-solid fa-circle-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>

    <!-- gallery -->
    <section class="bg-white">
        <div class="container">
            <div class="row gy-4 mx-0 mx-md-5">
                <!-- title -->
                <div class="col-12">
                    <h3 class="text-center mb-4">CS FEST - 2018</h3>
                    <div class="w-50 mx-auto bg-dark pb-1"></div>
                </div>

                <!-- images -->
                <div class="row gy-4">
                    <div class="col-12 col-md-4">
                        <div data-fancybox="gallery"
                             data-src="{{ asset('frontend/images/image_1.jpg') }}"
                             class="w-100 position-relative gallery-details">
                            <img src="{{ asset('frontend/images/image_2.jpg') }}"
                                 alt="image" class="img-fluid">
                            <div class="overlay"></div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div data-fancybox="gallery"
                             data-src="{{ asset('frontend/images/image_3.jpg') }}"
                             class="w-100 position-relative gallery-details">
                            <img src="{{ asset('frontend/images/image_3.jpg') }}"
                                 alt="image" class="img-fluid">
                            <div class="overlay"></div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div data-fancybox="gallery"
                             data-src="../../images/image (7).jpg"
                             class="w-100 position-relative gallery-details">
                            <img src="{{ asset('frontend/images/image_4.jpg') }}"
                                 alt="image" class="img-fluid">
                            <div class="overlay"></div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div data-fancybox="gallery"
                             data-src="../../images/image (8).jpg"
                             class="w-100 position-relative gallery-details">
                            <img src="{{ asset('frontend/images/image_5.jpg') }}"
                                 alt="image" class="img-fluid">
                            <div class="overlay"></div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div data-fancybox="gallery"
                             data-src="../../images/image (9).jpg"
                             class="w-100 position-relative gallery-details">
                            <img src="{{ asset('frontend/images/image_6.jpg') }}"
                                 alt="image" class="img-fluid">
                            <div class="overlay"></div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div data-fancybox="gallery"
                             data-src="../../images/image (10).jpg"
                             class="w-100 position-relative gallery-details">
                            <img src="{{ asset('frontend/images/image_8.jpg') }}"
                                 alt="image" class="img-fluid">
                            <div class="overlay"></div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div data-fancybox="gallery"
                             data-src="../../images/image (11).jpg"
                             class="w-100 position-relative gallery-details">
                            <img src="{{ asset('frontend/images/image_12.jpg') }}"
                                 alt="image" class="img-fluid">
                            <div class="overlay"></div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div data-fancybox="gallery"
                             data-src="../../images/image (12).jpg"
                             class="w-100 position-relative gallery-details">
                            <img src="{{ asset('frontend/images/image_12.jpg') }}"
                                 alt="image" class="img-fluid">
                            <div class="overlay"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</main> <!-- main -->
@endsection

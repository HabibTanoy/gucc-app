@extends('frontend.master')
@section('content')
    <!-- main -->
    <main>
        @foreach($blogs as $blog)
        <!-- activities and news banner -->
        <section class="p-0">
            <div class="news-banner d-flex align-items-center">
                <img class="bg-news"
                     src="{{ asset('frontend/images/banner1.jpg') }}"
                     alt="image">
                <div class="overlay"></div>
                <div class="news-banner-body py-5">
                    <div class="container">
                        <div class="row align-items-center gy-4 flex-column-reverse flex-md-row">
                            <div class="col-12 col-md 6">
                                <!-- title -->
                                <h1 class="text-white fw-bold"> {{$blog->title}}</h1>
                                <!-- sub title -->
{{--                                <h4 class="text-white fw-bold">A Workshop on ‘Premiere Pro for Everyone’ Was Formed by--}}
{{--                                    GUB Computer Club</h4>--}}
                                <!-- author -->
                                <p class="text-white mb-2"><b>Author:</b> {{$blog->name}}</p>
                                <!-- date time -->
                                <div class="d-flex text-white gap-3">
                                    <div class="d-flex gap-2 align-items-center">
                                        <i class="fa-solid fa-calendar-days"></i>
                                        <p class="m-0">{{$blog->created_at->format('M d, Y')}}</p>
                                    </div>
{{--                                    <div class="d-flex gap-2 align-items-center">--}}
{{--                                        <i class="fa-solid fa-clock"></i>--}}
{{--                                        <p class="m-0">{{$blog->created_at->format('M d, Y')}}</p>--}}
{{--                                    </div>--}}
                                </div>
                                <!-- share on social platform -->
                                <div class="text-white mt-5">
                                    <h6>Share On</h6>
                                    <div class="d-flex gap-2 align-items-center share-social-icon mt-3">
                                        <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                                        <a href=""><i class="fa-brands fa-twitter"></i></a>
                                        <a href=""><i class="fa-brands fa-instagram"></i></a>
                                        <a href=""><i class="fa-brands fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
{{--                            <div class="col-12 col-md 6">--}}
{{--                                <img src="{{ asset('frontend/images/image_18.jpg') }}"--}}
{{--                                     alt="image" class="img-fluid">--}}
{{--                            </div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- activities and news details -->
        <article class="py-5">
            <div class="container">
                <div class="row">

                    <!-- text with below image -->
                    <div class="col-12 mb-4">
                        <h3 class="text-center font-weight-bold mb-5">Description</h3>
                        <p>{{$blog->body_details}} </p>
                    </div>
                </div>
            </div>
        </article>


        @endforeach
    </main> <!-- main -->

@endsection

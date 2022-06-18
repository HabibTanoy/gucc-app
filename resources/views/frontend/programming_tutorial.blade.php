@extends('frontend.master')
@section('content')
{{--<section>--}}
{{--    <div class="container mx-auto">--}}
{{--        <h1 class="text-center m-5 title-deco fw-bold">Programming Tutorial</h1>--}}
{{--        <section>--}}
{{--            <div class="container">--}}
{{--                <div class="row">--}}
{{--                    <h2 class="text-center text-success fw-bold">HTML</h2>--}}
{{--                    @foreach($tutorial_html as $html)--}}
{{--                    <div class="col col-lg-8 mx-auto">--}}
{{--                        <a class="text-decoration-none text-center" href="{{route('video', $html->id)}}">--}}
{{--                            <div class="service-col">--}}
{{--                                <h5>{{$html->title}}</h5>--}}
{{--                                <p>{{$html->body_details}}</p>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    @endforeach--}}
{{--                </div>--}}
{{--                <div class="row">--}}
{{--                    <h2 class="text-center text-success fw-bold">Javascript</h2>--}}
{{--                    @foreach($tutorial_js as $js)--}}
{{--                        <div class="col col-lg-8 mx-auto">--}}
{{--                            <a class="text-decoration-none text-center" href="{{route('video', $js->id)}}">--}}
{{--                                <div class="service-col">--}}
{{--                                    <h5>{{$js->title}}</h5>--}}
{{--                                    <p>{{$js->body_details}}</p>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    @endforeach--}}
{{--                </div>--}}
{{--                <div class="row">--}}
{{--                    <h2 class="text-center text-success fw-bold">CSS</h2>--}}
{{--                    @foreach($tutorial_css as $css)--}}
{{--                        <div class="col col-lg-8 mx-auto">--}}
{{--                            <a class="text-decoration-none text-center" href="{{route('video', $css->id)}}">--}}
{{--                                <div class="service-col">--}}
{{--                                    <h5>{{$css->title}}</h5>--}}
{{--                                    <p>{{$css->body_details}}</p>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    @endforeach--}}
{{--                </div>--}}
{{--                <div class="row">--}}
{{--                    <h2 class="text-center text-success fw-bold">Bootstrap</h2>--}}
{{--                    @foreach($tutorial_bootstrap as $bootstrap)--}}
{{--                        <div class="col col-lg-8 mx-auto">--}}
{{--                            <a class="text-decoration-none text-center" href="{{route('video', $bootstrap->id)}}">--}}
{{--                                <div class="service-col">--}}
{{--                                    <h5>{{$bootstrap->title}}</h5>--}}
{{--                                    <p>{{$bootstrap->body_details}}</p>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    @endforeach--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}
{{--    </div>--}}
{{--</section>--}}
<main>
    <!-- our events -->
    <section class="d-flex align-items-center justify-content-center mt-5 mb-5" style="min-height:67vh;">
        <div class="container">
            <div class="row gy-4">

                <!-- title -->
                <div class="col-12">
                    <h1 class="text-center mb-5 fw-bold">Tutorial</h1>
                </div>

                @foreach($subjects as $subject_name => $subject_type)
                <!-- card -->
                <div class="col-12 col-md-4">
                    <a href="{{ route('video', $subject_type) }}">
                        <div class="event">
                            <img class="rounded" src="https://images.wallpaperscraft.com/image/single/code_coding_binary_code_abstract_patterns_112140_2048x1152.jpg" alt="image">
                            <p>{{ $subject_name }}</p>
                            <div class="overlay rounded"></div>
                        </div>
                    </a>
                </div>
                @endforeach

            </div> <!-- row -->
        </div> <!-- container -->
    </section> <!-- end of our events -->

</main> <!-- main -->
@endsection

@extends('frontend.master')
@section('content')
<section>
    <div class="container mx-auto">
        <h1 class="text-center m-5 title-deco fw-bold">Programming Tutorial</h1>
        <section>
            <div class="container">
                <div class="row">
                    <h2 class="text-center text-success fw-bold">HTML</h2>
                    @foreach($tutorial_html as $html)
                    <div class="col col-lg-8 mx-auto">
                        <a class="text-decoration-none text-center" href="{{route('video', $html->id)}}">
                            <div class="service-col">
                                <h5>{{$html->title}}</h5>
                                <p>{{$html->body_details}}</p>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
                <div class="row">
                    <h2 class="text-center text-success fw-bold">Javascript</h2>
                    @foreach($tutorial_js as $js)
                        <div class="col col-lg-8 mx-auto">
                            <a class="text-decoration-none text-center" href="{{route('video', $js->id)}}">
                                <div class="service-col">
                                    <h5>{{$js->title}}</h5>
                                    <p>{{$js->body_details}}</p>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                <div class="row">
                    <h2 class="text-center text-success fw-bold">CSS</h2>
                    @foreach($tutorial_css as $css)
                        <div class="col col-lg-8 mx-auto">
                            <a class="text-decoration-none text-center" href="{{route('video', $css->id)}}">
                                <div class="service-col">
                                    <h5>{{$css->title}}</h5>
                                    <p>{{$css->body_details}}</p>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                <div class="row">
                    <h2 class="text-center text-success fw-bold">Bootstrap</h2>
                    @foreach($tutorial_bootstrap as $bootstrap)
                        <div class="col col-lg-8 mx-auto">
                            <a class="text-decoration-none text-center" href="{{route('video', $bootstrap->id)}}">
                                <div class="service-col">
                                    <h5>{{$bootstrap->title}}</h5>
                                    <p>{{$bootstrap->body_details}}</p>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
</section>
@endsection

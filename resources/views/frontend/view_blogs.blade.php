@extends('frontend.master')
@section('content')
    <main>
        <!-- our events -->
        <section class="d-flex align-items-center justify-content-center mt-5 mb-5" style="min-height:67vh;">
            <div class="container">
                <div class="row gy-4">

                    <!-- title -->
                    <div class="col-12">
                        <!--for blog title-->
                        <h1 class="text-center mb-5 fw-bold">Blogs</h1>
                    </div>
                    <section class="bg-white">
                        <div class="container">

                            <!-- activity news -->
                            <div class="row g-5">
                                @foreach($blogs as $blog)
                                    <!-- card -->
                                    <div class="col-12 col-md-4">
                                        <div class="card news position-relative">
{{--                                            <img src="{{URL::asset($activity_news->image)}}" style="height:250px" class="card-img-top" alt="image">--}}
{{--                                            <div class="bg-light-green text-center text-white position-absolute top-0 end-0 m-3 px-2 rounded-pill"--}}
{{--                                                 style="font-size: 0.8em;">ACTIVITIES & NEWS</div>--}}
                                            <div class="card-body">
                                                <h3 class="card-text text-center">Name: {{$blog->name}}</h3>
                                                <h5 class="card-title">Title: {{$blog->title}}</h5>
                                                <p class="card-text">Description:
                                                    {{Str::limit($blog->body_details, 200)}}
                                                </p>
                                                <div class="text-center">
                                                    <a href="{{route('blog-view', $blog->id)}}" class="btn btn-primary">Read More</a>
                                                </div>
                                                <small>{{$blog->created_at->format('M d, Y')}}</small>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div> <!-- row -->

                        </div>
                    </section>

                </div> <!-- row -->
            </div> <!-- container -->
        </section> <!-- end of our events -->

    </main> <!-- main -->
@endsection

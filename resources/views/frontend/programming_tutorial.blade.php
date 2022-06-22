@extends('frontend.master')
@section('content')
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

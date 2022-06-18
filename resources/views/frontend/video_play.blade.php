@extends('frontend.master')
@section('content')
<main>
    <section class="cv mb-5">
        <div class="container">
            <div class="row gy-4">
                @foreach($tutorials as $tutorial)
                <div class="col-md-6 col-lg-4">
                    <div class="card">
                            {!! $tutorial->link !!}
                        <div class="card-body">
                            <h5 class="card-title">{{ $tutorial->title }}</h5>
                            <p class="card-text">{{ $tutorial->body_details }}</p>

                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

</main> <!-- main -->
@endsection

@extends('frontend.master')
@section('content')
<main>
    <section class="cv mb-5">
        <div class="container">
            <div class="row">
                @foreach($tutorials as $tutorial)
                <div class="col-md-6 mb-5">
                    <div class="card" style="width: 35rem;">
                        {!! $tutorial->link !!}
                        <div class="card-body">
                            <h5 class="card-title">Title: {{ $tutorial->title }}</h5>
                            <p class="card-text">Description: {{$tutorial->body_details}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

</main> <!-- main -->
@endsection

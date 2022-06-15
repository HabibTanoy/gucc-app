@extends('frontend.master')
@section('content')
<h3 class="mt-5 pt-5 mb-5 ms-5 text-center">Title: {{$tutorial->title}}</h3>
<div class="text-center mb-5">
    {!! $tutorial->link !!}
</div>
<h2 class="text-center">Details: {{$tutorial->body_details}}</h2>
@endsection

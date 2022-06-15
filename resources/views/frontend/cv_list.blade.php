@extends('frontend.master')
@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col col-lg-6 border border-warning">
                <h2 class="text-center my-5">Front End CV</h2>
                <div class="row text-center">
                    @foreach($frontend_cv as $frontend)
                    <div class="col col-lg-4 mb-4">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal_{{$frontend->id}}">
                            <h5>{{$frontend->users['name']}}-Resume</h5>
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="modal_{{$frontend->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">CV</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <embed src="{{$frontend->cv}}" width="450" height="500" type="application/pdf" />
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                            Close
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col col-lg-6 border border-warning">
                <h2 class="text-center my-5">Back-end CV</h2>
                <div class="row text-center">
                    @foreach($backend_cv as $backend)
                    <div class="col col-lg-4 mb-4">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal_{{$backend->id}}">
                            <h5>{{$backend->users['name']}}-Resume</h5>
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="modal_{{$backend->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">CV</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <embed src="{{$backend->cv}}" width="450" height="500" type="application/pdf" />
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                            Close
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

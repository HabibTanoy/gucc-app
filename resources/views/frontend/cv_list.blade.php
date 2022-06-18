@extends('frontend.master')
@section('content')
{{--<section>--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col col-lg-6 border border-warning">--}}
{{--                <h2 class="text-center my-5">Front End CV</h2>--}}
{{--                <div class="row text-center">--}}
{{--                    @foreach($frontend_cv as $frontend)--}}
{{--                    <div class="col col-lg-4 mb-4">--}}
{{--                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal_{{$frontend->id}}">--}}
{{--                            <h5>{{$frontend->users['name']}}-Resume</h5>--}}
{{--                        </button>--}}
{{--                        <!-- Modal -->--}}
{{--                        <div class="modal fade" id="modal_{{$frontend->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">--}}
{{--                            <div class="modal-dialog modal-dialog-scrollable">--}}
{{--                                <div class="modal-content">--}}
{{--                                    <div class="modal-header">--}}
{{--                                        <h5 class="modal-title" id="staticBackdropLabel">CV</h5>--}}
{{--                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>--}}
{{--                                    </div>--}}
{{--                                    <div class="modal-body">--}}
{{--                                        <embed src="{{$frontend->cv}}" width="450" height="500" type="application/pdf" />--}}
{{--                                    </div>--}}
{{--                                    <div class="modal-footer">--}}
{{--                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">--}}
{{--                                            Close--}}
{{--                                        </button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    @endforeach--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col col-lg-6 border border-warning">--}}
{{--                <h2 class="text-center my-5">Back-end CV</h2>--}}
{{--                <div class="row text-center">--}}
{{--                    @foreach($backend_cv as $backend)--}}
{{--                    <div class="col col-lg-4 mb-4">--}}
{{--                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal_{{$backend->id}}">--}}
{{--                            <h5>{{$backend->users['name']}}-Resume</h5>--}}
{{--                        </button>--}}
{{--                        <!-- Modal -->--}}
{{--                        <div class="modal fade" id="modal_{{$backend->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">--}}
{{--                            <div class="modal-dialog modal-dialog-scrollable">--}}
{{--                                <div class="modal-content">--}}
{{--                                    <div class="modal-header">--}}
{{--                                        <h5 class="modal-title" id="staticBackdropLabel">CV</h5>--}}
{{--                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>--}}
{{--                                    </div>--}}
{{--                                    <div class="modal-body">--}}
{{--                                        <embed src="{{$backend->cv}}" width="450" height="500" type="application/pdf" />--}}
{{--                                    </div>--}}
{{--                                    <div class="modal-footer">--}}
{{--                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">--}}
{{--                                            Close--}}
{{--                                        </button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    @endforeach--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
<main>
    <section class="cv">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="text-center mb-4">CV List</h3>
                </div>
                <div class="col-lg-8 mx-auto">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="front-end-tab" data-bs-toggle="tab"
                                    data-bs-target="#front-end" type="button" role="tab" aria-controls="front-end"
                                    aria-selected="true">Front End</button>
                            <button class="nav-link" id="back-end-tab" data-bs-toggle="tab"
                                    data-bs-target="#back-end" type="button" role="tab" aria-controls="back-end"
                                    aria-selected="false">Back End</button>
                        </div>
                    </nav>
                    <div class="tab-content shadow-sm" id="nav-tabContent">
                        <div class="tab-pane fade show active p-2 p-md-5 border-bottom border-start border-end"
                             id="front-end" role="tabpanel" aria-labelledby="front-end-tab">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Subject</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($frontend_cv as $frontend)
                                    <tr>
                                        <td>{{$frontend->name}}</td>
                                        @if($frontend->developer_type == 1)
                                        <td>Frontend</td>
                                        @endif
                                        <td>{{$frontend->created_at->format('M d, Y')}}</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="{{$frontend->cv}}" class="btn btn-primary btn-sm mx-1" target="_blank"><i
                                                        class="fa-solid fa-eye"></i></a>
                                                <a href="#" class="btn btn-primary btn-sm mx-1"><i
                                                        class="fa-solid fa-download"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
{{--                        backend--}}
                        <div class="tab-pane fade border-bottom border-start border-end p-2 p-md-5" id="back-end"
                             role="tabpanel" aria-labelledby="back-end-tab">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Subject</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                    </thead>
                                    @foreach($backend_cv as $backend)
                                    <tbody>
                                    <tr>
                                        <td>{{$backend->name}}</td>
                                        @if($backend->developer_type == 2)
                                            <td>Backend</td>
                                        @endif
                                        <td>{{$backend->created_at->format('M d, Y')}}</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="{{$backend->cv}}" class="btn btn-primary btn-sm mx-1" target="_blank"><i
                                                        class="fa-solid fa-eye"></i></a>
                                                <a href="#" class="btn btn-primary btn-sm mx-1"><i
                                                        class="fa-solid fa-download"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

</main> <!-- main -->

@endsection

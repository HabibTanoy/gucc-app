@extends('frontend.master')
@section('content')
    <main>
        <section class="d-flex align-items-center justify-content-center p-0 mb-5 pb-5" style="height:67vh;">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mx-auto">
                        <div class="card p-5 shadow-sm">
                            <h3 class="text-center">Write Blog</h3>
                            <form action="{{route('blog-store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-12 mb-3">
                                        <label for="formFileMultiple" class="form-label text-dark mt-4">Name</label>
                                        <input class="form-control" type="text" name="name" id="" placeholder="Enter Your Name">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="formFileMultiple" class="form-label text-dark mt-4">Title</label>
                                        <input class="form-control" type="text" name="title" id="" placeholder="Title">
                                    </div>
                                    <div class="form-group col-12 mb-3">
                                        <label>Description</label>
                                        <textarea style="resize:none" name="body_details" class="form-control"></textarea>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <div class="text-center">
                                            <button name="submit" type="submit" class="btn btn-outline-dark mx-auto w-50 fw-bold">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main> <!-- main -->
@endsection

@extends('frontend.master')
@section('content')
<!-- main -->
<main>
    <section class="d-flex align-items-center justify-content-center p-0" style="height:67vh;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                        <div class="card p-5 shadow-sm">
                            <h3 class="text-center">Portfolio</h3>
                            <form action="{{route('upload-cv')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-12 mb-3">
                                        <label for="formFileMultiple" class="form-label text-dark mt-4">Name</label>
                                        <input class="form-control" type="text" name="name" id="" placeholder="Enter Your Name">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <p class="mb-2">Select Subject</p>
                                        <select class="form-select" name="type" aria-label=".form-select-lg example">
                                            <option selected>Open this select menu</option>
                                            <option value="1">Frontend</option>
                                            <option value="2">Backend</option>
                                        </select>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="formFileMultiple" class="form-label text-dark mt-4">Drop Your Protfolio</label>
                                        <input class="form-control" type="file" name="upload_file" id="formFileMultiple" multiple>
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

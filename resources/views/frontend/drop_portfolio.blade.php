@extends('frontend.master')
@section('content')
<form action="{{route('upload-cv')}}" method="post" enctype="multipart/form-data">
    @csrf
<div class="d-flex justify-content-center align-items-center">
        <div class="w-50 mb-5 port-continer">
            <h3 class="font-weight-bold mt-5 mb-4">Select Subject</h3>
            <select class="form-select" name="type" aria-label=".form-select-lg example">
                <option selected>Open this select menu</option>
                <option value="1">Frontend</option>
                <option value="2">Backend</option>
            </select>
            <div class="mb-5">
                <label for="formFileMultiple" class="form-label text-dark mt-4">Drop Your Protfolio</label>
                <input class="form-control" type="file" name="upload_file" id="formFileMultiple" multiple>
            </div>
            <div class="d-flex justify-content-center align-center">
                <button name="submit" type="submit" class="btn btn-outline-dark mx-auto w-50 fw-bold">Submit</button>
            </div>
        </div>
</div>
</form>
@endsection

@extends('frontend.master')
@section('content')

    <!-- main -->
    <main>
        <!-- navbar bottom heading -->
        <div class="container-fluid g-0">
            <div class="row g-0">
                <div class="col-md-12">
                    <div class="navbar-bottom-heading">
                        <img src="{{ asset('frontend/images/banner1.jpg') }}" alt="image">
                        <div class="overlay"></div>
                        <h1 class="text-center text-white fw-bold">FORMER COMMITTEES</h1>
                    </div>
                </div>
            </div>
        </div>

        <section class="bg-white">
            <div class="container">

                <div class="row gy-md-5 gy-4">

                    <div class="col-12">
                        <div class="row align-items-center flex-md-row flex-column-reverse gy-4">
                            @foreach($former_committees as $former_committee)
                            <!-- text content -->
                            <div class="col-12 col-md-6">
                                <h3>{{$former_committee->card_title}}</h3>
                                <p>
                                    {{$former_committee->card_body_details}}
                                </p>
                                <div class="text-center text-md-start">
                                    <a href="#" class="btn btn-outline-primary">View Members</a>
                                </div>
                            </div>

                            <!-- image -->
                            <div class="col-12 col-md-6">
                                <img src="{{URL::asset($former_committee->image)}}" alt="image" class="img-fluid">
                            </div>
                            @endforeach
                        </div> <!-- row -->
                    </div> <!-- end of col-12 -->

                    <div class="col-12">
                        <div class="row align-items-center gy-4">

                            <!-- image -->
                            <div class="col-12 col-md-6">
                                <img src="../images/image (4).jpg" alt="image" class="img-fluid">
                            </div>

                            <!-- text content -->
                            <div class="col-12 col-md-6">
                                <h3>Session: Spring '20 - Spring '21</h3>
                                <p>
                                    The executive body operating from Spring ’20 to Spring ’21 worked tirelessly to keep
                                    up
                                    with
                                    the club activities despite the challenges due to COVID-19. The executive board
                                    arranged
                                    annual events like ‘JARVIS 2.0’, ‘Freshman Orientation Ceremony’ in 2020 entirely
                                    online.
                                    The board organized seminars on ‘Web Designing’ as well as took initiatives in
                                    webinars,
                                    virtual workshops, and virtual general meetings during the lockdown. Along with
                                    initiating
                                    some leading virtual workshops on ‘Software Requirement Analysis’, ‘LinkedIn and CV
                                    Writing’, ‘Graphic Design’, the committee supported ‘Nasa Space App Challenge 2020’
                                    which
                                    was held virtually for the first time. One of the biggest achievements of the
                                    executive
                                    panel was ‘Re-launching the Website of GUB Computer Club’ with a brand new look and
                                    advanced features.
                                </p>
                                <div class="text-center text-md-start">
                                    <a href="#" class="btn btn-outline-primary">View Members</a>
                                </div>
                            </div>

                        </div> <!-- row -->
                    </div> <!-- end of col-12 -->


                    <div class="col-12">
                        <div class="row align-items-center flex-md-row flex-column-reverse gy-4">

                            <!-- text content -->
                            <div class="col-12 col-md-6">
                                <h3>Session: Spring '20 - Spring '21</h3>
                                <p>
                                    The executive body operating from Spring ’20 to Spring ’21 worked tirelessly to keep
                                    up
                                    with
                                    the club activities despite the challenges due to COVID-19. The executive board
                                    arranged
                                    annual events like ‘JARVIS 2.0’, ‘Freshman Orientation Ceremony’ in 2020 entirely
                                    online.
                                    The board organized seminars on ‘Web Designing’ as well as took initiatives in
                                    webinars,
                                    virtual workshops, and virtual general meetings during the lockdown. Along with
                                    initiating
                                    some leading virtual workshops on ‘Software Requirement Analysis’, ‘LinkedIn and CV
                                    Writing’, ‘Graphic Design’, the committee supported ‘Nasa Space App Challenge 2020’
                                    which
                                    was held virtually for the first time. One of the biggest achievements of the
                                    executive
                                    panel was ‘Re-launching the Website of GUB Computer Club’ with a brand new look and
                                    advanced features.
                                </p>
                                <div class="text-center text-md-start">
                                    <a href="#" class="btn btn-outline-primary">View Members</a>
                                </div>
                            </div>

                            <!-- image -->
                            <div class="col-12 col-md-6">
                                <img src="../images/image (4).jpg" alt="image" class="img-fluid">
                            </div>

                        </div> <!-- row -->
                    </div> <!-- end of col-12 -->

                    <div class="col-12">
                        <div class="row align-items-center gy-4">

                            <!-- image -->
                            <div class="col-12 col-md-6">
                                <img src="../images/image (4).jpg" alt="image" class="img-fluid">
                            </div>

                            <!-- text content -->
                            <div class="col-12 col-md-6">
                                <h3>Session: Spring '20 - Spring '21</h3>
                                <p>
                                    The executive body operating from Spring ’20 to Spring ’21 worked tirelessly to keep
                                    up
                                    with
                                    the club activities despite the challenges due to COVID-19. The executive board
                                    arranged
                                    annual events like ‘JARVIS 2.0’, ‘Freshman Orientation Ceremony’ in 2020 entirely
                                    online.
                                    The board organized seminars on ‘Web Designing’ as well as took initiatives in
                                    webinars,
                                    virtual workshops, and virtual general meetings during the lockdown. Along with
                                    initiating
                                    some leading virtual workshops on ‘Software Requirement Analysis’, ‘LinkedIn and CV
                                    Writing’, ‘Graphic Design’, the committee supported ‘Nasa Space App Challenge 2020’
                                    which
                                    was held virtually for the first time. One of the biggest achievements of the
                                    executive
                                    panel was ‘Re-launching the Website of GUB Computer Club’ with a brand new look and
                                    advanced features.
                                </p>
                                <div class="text-center text-md-start">
                                    <a href="#" class="btn btn-outline-primary">View Members</a>
                                </div>
                            </div>

                        </div> <!-- row -->
                    </div> <!-- end of col-12 -->


                    <div class="col-12">
                        <div class="row align-items-center flex-md-row flex-column-reverse gy-4">

                            <!-- text content -->
                            <div class="col-12 col-md-6">
                                <h3>Session: Spring '20 - Spring '21</h3>
                                <p>
                                    The executive body operating from Spring ’20 to Spring ’21 worked tirelessly to keep
                                    up
                                    with
                                    the club activities despite the challenges due to COVID-19. The executive board
                                    arranged
                                    annual events like ‘JARVIS 2.0’, ‘Freshman Orientation Ceremony’ in 2020 entirely
                                    online.
                                    The board organized seminars on ‘Web Designing’ as well as took initiatives in
                                    webinars,
                                    virtual workshops, and virtual general meetings during the lockdown. Along with
                                    initiating
                                    some leading virtual workshops on ‘Software Requirement Analysis’, ‘LinkedIn and CV
                                    Writing’, ‘Graphic Design’, the committee supported ‘Nasa Space App Challenge 2020’
                                    which
                                    was held virtually for the first time. One of the biggest achievements of the
                                    executive
                                    panel was ‘Re-launching the Website of GUB Computer Club’ with a brand new look and
                                    advanced features.
                                </p>
                                <div class="text-center text-md-start">
                                    <a href="#" class="btn btn-outline-primary">View Members</a>
                                </div>
                            </div>

                            <!-- image -->
                            <div class="col-12 col-md-6">
                                <img src="../images/image (4).jpg" alt="image" class="img-fluid">
                            </div>

                        </div> <!-- row -->
                    </div> <!-- end of col-12 -->

                    <div class="col-12">
                        <div class="row align-items-center gy-4">

                            <!-- image -->
                            <div class="col-12 col-md-6">
                                <img src="../images/image (4).jpg" alt="image" class="img-fluid">
                            </div>

                            <!-- text content -->
                            <div class="col-12 col-md-6">
                                <h3>Session: Spring '20 - Spring '21</h3>
                                <p>
                                    The executive body operating from Spring ’20 to Spring ’21 worked tirelessly to keep
                                    up
                                    with
                                    the club activities despite the challenges due to COVID-19. The executive board
                                    arranged
                                    annual events like ‘JARVIS 2.0’, ‘Freshman Orientation Ceremony’ in 2020 entirely
                                    online.
                                    The board organized seminars on ‘Web Designing’ as well as took initiatives in
                                    webinars,
                                    virtual workshops, and virtual general meetings during the lockdown. Along with
                                    initiating
                                    some leading virtual workshops on ‘Software Requirement Analysis’, ‘LinkedIn and CV
                                    Writing’, ‘Graphic Design’, the committee supported ‘Nasa Space App Challenge 2020’
                                    which
                                    was held virtually for the first time. One of the biggest achievements of the
                                    executive
                                    panel was ‘Re-launching the Website of GUB Computer Club’ with a brand new look and
                                    advanced features.
                                </p>
                                <div class="text-center text-md-start">
                                    <a href="#" class="btn btn-outline-primary">View Members</a>
                                </div>
                            </div>

                        </div> <!-- row -->
                    </div> <!-- end of col-12 -->


                    <div class="col-12">
                        <div class="row align-items-center flex-md-row flex-column-reverse gy-4">

                            <!-- text content -->
                            <div class="col-12 col-md-6">
                                <h3>Session: Spring '20 - Spring '21</h3>
                                <p>
                                    The executive body operating from Spring ’20 to Spring ’21 worked tirelessly to keep
                                    up
                                    with
                                    the club activities despite the challenges due to COVID-19. The executive board
                                    arranged
                                    annual events like ‘JARVIS 2.0’, ‘Freshman Orientation Ceremony’ in 2020 entirely
                                    online.
                                    The board organized seminars on ‘Web Designing’ as well as took initiatives in
                                    webinars,
                                    virtual workshops, and virtual general meetings during the lockdown. Along with
                                    initiating
                                    some leading virtual workshops on ‘Software Requirement Analysis’, ‘LinkedIn and CV
                                    Writing’, ‘Graphic Design’, the committee supported ‘Nasa Space App Challenge 2020’
                                    which
                                    was held virtually for the first time. One of the biggest achievements of the
                                    executive
                                    panel was ‘Re-launching the Website of GUB Computer Club’ with a brand new look and
                                    advanced features.
                                </p>
                                <div class="text-center text-md-start">
                                    <a href="#" class="btn btn-outline-primary">View Members</a>
                                </div>
                            </div>

                            <!-- image -->
                            <div class="col-12 col-md-6">
                                <img src="../images/image (4).jpg" alt="image" class="img-fluid">
                            </div>

                        </div> <!-- row -->
                    </div> <!-- end of col-12 -->

                    <div class="col-12">
                        <div class="row align-items-center gy-4">

                            <!-- image -->
                            <div class="col-12 col-md-6">
                                <img src="../images/image (4).jpg" alt="image" class="img-fluid">
                            </div>

                            <!-- text content -->
                            <div class="col-12 col-md-6">
                                <h3>Session: Spring '20 - Spring '21</h3>
                                <p>
                                    The executive body operating from Spring ’20 to Spring ’21 worked tirelessly to keep
                                    up
                                    with
                                    the club activities despite the challenges due to COVID-19. The executive board
                                    arranged
                                    annual events like ‘JARVIS 2.0’, ‘Freshman Orientation Ceremony’ in 2020 entirely
                                    online.
                                    The board organized seminars on ‘Web Designing’ as well as took initiatives in
                                    webinars,
                                    virtual workshops, and virtual general meetings during the lockdown. Along with
                                    initiating
                                    some leading virtual workshops on ‘Software Requirement Analysis’, ‘LinkedIn and CV
                                    Writing’, ‘Graphic Design’, the committee supported ‘Nasa Space App Challenge 2020’
                                    which
                                    was held virtually for the first time. One of the biggest achievements of the
                                    executive
                                    panel was ‘Re-launching the Website of GUB Computer Club’ with a brand new look and
                                    advanced features.
                                </p>
                                <div class="text-center text-md-start">
                                    <a href="#" class="btn btn-outline-primary">View Members</a>
                                </div>
                            </div>

                        </div> <!-- row -->
                    </div> <!-- end of col-12 -->




                </div>


            </div>
        </section>

    </main> <!-- main -->
    <!-- Back to top button -->
    <a class="text-decoration-none text-white d-flex align-items-center justify-content-center" id="button">
        <i class="fa-solid fa-circle-arrow-up"></i>
    </a>
@endsection

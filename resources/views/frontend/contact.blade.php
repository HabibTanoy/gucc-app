@extends('frontend.master')
@section('content')
    <!-- main -->
    <main>
        <!-- navbar bottom heading -->
        <div class="container-fluid g-0">
            <div class="row g-0">
                <div class="col-md-12">
                    <div class="navbar-bottom-heading">
                        <img src="../images/image (7).jpg" alt="image">
                        <div class="overlay"></div>
                        <h1 class="text-center text-white fw-bold">CONTACT</h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- contact -->
        <section class="bg-white" id="#contact">
            <div class="container">
                <div class="row align-items-center gy-4 flex-column-reverse flex-md-row">
                    <div class="col-12 col-md-6">
                        <div style="width: 100%">
                            <iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0"
                                    marginwidth="0"
                                    src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Malet%20St,%20London%20WC1E%207HU,%20United%20Kingdom+(Your%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
                                <a href="https://www.gps.ie/sport-gps/">fitness tracker</a>
                            </iframe>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 text-center text-md-start">
                        <!-- title -->
                        <h2>GET IN TOUCH</h2>
                        <!-- text block -->
                        <div>
                            <h4>Location</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur magni veritatis eos
                                eligendi animi in, atque possimus quaerat eveniet quas.</p>
                        </div>
                        <div>
                            <h4>Contact</h4>
                            <p class="text-primary">
                                <i class="fa-solid fa-envelope"></i>
                                <a class="text-decoration-none" href="mailto:dummy@mail.com">dummy@mail.com</a>
                            </p>
                        </div>

                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </section> <!-- contact -->
    </main> <!-- main -->

    <!-- Back to top button -->
    <a class="text-decoration-none text-white d-flex align-items-center justify-content-center" id="button">
        <i class="fa-solid fa-circle-arrow-up"></i>
    </a>
@endsection

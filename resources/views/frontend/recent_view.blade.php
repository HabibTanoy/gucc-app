@extends('frontend.master')
@section('content')
    <!-- main -->
    <main>

        <!-- activities and news banner -->
        <section class="p-0">
            <div class="news-banner d-flex align-items-center">
                <img class="bg-news"
                     src="{{ asset('frontend/images/banner1.jpg') }}"
                     alt="image">
                <div class="overlay"></div>
                <div class="news-banner-body py-5">
                    <div class="container">
                        <div class="row align-items-center gy-4 flex-column-reverse flex-md-row">
                            <div class="col-12 col-md 6">
                                <!-- title -->
                                <h1 class="text-white fw-bold"> ACTIVITIES & NEWS</h1>
                                <!-- sub title -->
                                <h4 class="text-white fw-bold">A Workshop on ‘Premiere Pro for Everyone’ Was Formed by
                                    GUB Computer Club</h4>
                                <!-- author -->
                                <p class="text-white mb-2"><b>Author:</b> Computer Club</p>
                                <!-- date time -->
                                <div class="d-flex text-white gap-3">
                                    <div class="d-flex gap-2 align-items-center">
                                        <i class="fa-solid fa-calendar-days"></i>
                                        <p class="m-0">May 23, 2022</p>
                                    </div>
                                    <div class="d-flex gap-2 align-items-center">
                                        <i class="fa-solid fa-clock"></i>
                                        <p class="m-0">9:30 pm</p>
                                    </div>
                                </div>
                                <!-- share on social platform -->
                                <div class="text-white mt-5">
                                    <h6>Share On</h6>
                                    <div class="d-flex gap-2 align-items-center share-social-icon mt-3">
                                        <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                                        <a href=""><i class="fa-brands fa-twitter"></i></a>
                                        <a href=""><i class="fa-brands fa-instagram"></i></a>
                                        <a href=""><i class="fa-brands fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md 6">
                                <img src="{{ asset('frontend/images/image_18.jpg') }}"
                                     alt="image" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- activities and news details -->
        <article class="py-5">
            <div class="container">
                <div class="row">

                    <!-- text with below image -->
                    <div class="col-12 mb-4">
                        <p>GUB Computer Club organized a workshop on ‘Premiere Pro for Everyone’ on 28th January 2022
                            for its members to help them flourishing on the field of video editing. The sole purpose of
                            this workshop is to get all participants acquainted with the basics of Premiere Pro and to
                            rapidly familiarize participants with all possibilities of the software. The workshop was
                            conducted by Md. Ibrahim Bahadur, Assistant General Secretary – Event Coverage And Post
                            Production, GUB Computer Club, using the online platform ‘Google Meet’. </p>
                        <div class="text-center">
                            <img src="{{ asset('frontend/images/image_17.jpg') }}" alt="image" class="img-fluid">
                        </div>
                    </div>

                    <!-- text with top image -->
                    <div class="col-12">
                        <div class="text-center">
                            <img src="{{ asset('frontend/images/image_18.jpg') }}" alt="image" class="img-fluid">
                        </div>
                        <p class="pt-3">Hosting side by side, Niloy Roy and Samiha Hossain the two general members of
                            GUB Computer
                            Club started the workshop by introducing the speaker Md. Ibrahim Bahadur. Then Mr. Bahadur
                            started the session by sowing the seeds of unlimited video editing possibilities with
                            Premiere Pro to the participants’ minds. The whole workshop was segmented into three
                            sections. Mr. Bahadur designed the workshop for beginners, intermediate learners, and for
                            advanced-level learners as well. Maintaining the flow, he introduced the basic interface and
                            components of premiere pro like source monitor, project panel, program monitor, timeline,
                            and tools panel at the very beginning of the session. Marching forward, he showed
                            participants, the way of creating a sequence in a video, cutting and adding footage, mixing
                            audios with videos in a synchronized manner, and after-effects. In the meantime, Abhijit
                            Bhowmik, Associate Professor and Special Asst., Office of Student Affairs, GUB, enhanced
                            the session’s charm with his presence and gave the advice to trail career on video editing
                            for those who don’t want to go on a traditional track of job sectors. He praised the speaker
                            to make such an excellent workshop and advised the participants to attend the workshops to
                            get a hands-on experience. In addition, Md. Sabbir Shikder Orid, former Assistant General
                            Secretary – Event Coverage And Post Production, GUB Computer Club, gave a positive thought
                            to the magnificent workshop. By proceeding further, Mr. Bahadur manifested video track text
                            lair, different plug-ins, and motion transition. In order to make the whole session
                            interactive, he encouraged the participants to suggest designing concepts instantly which
                            got a huge response. Finally, he finished the session by showing color grading, adding
                            titles and their calculated transitions regarding videos. Mr. Bahadur welcomed questions
                            from attendees throughout each segment to clear their doubts and queries. </p>
                    </div>

                    <!-- just text block -->
                    <div class="col-12">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam placeat non error sit
                            provident dolorum reprehenderit veritatis ea. Distinctio, aspernatur assumenda quae eos, sed
                            temporibus nisi placeat expedita possimus reiciendis recusandae aut! Debitis sed expedita
                            ipsa, voluptates animi, libero illo temporibus quos, aliquam voluptatum facilis quibusdam
                            velit GUBusantium harum veniam saepe pariatur aut perferendis ipsum labore dolores? Quaerat
                            placeat esse, laboriosam facilis repudiandae cum non perferendis distinctio quis saepe atque
                            quo ullam quos quae nostrum minima! Voluptas fuga voluptatibus laboriosam sequi cumque
                            dolore iusto optio autem commodi ducimus explicabo id dignissimos debitis dolorem, alias
                            consequatur tempora laudantium suscipit voluptates labore.</p>
                    </div>
                </div>
            </div>
        </article>

        <!-- related activity news -->
        <section class="bg-white">
            <div class="container">
                <div class="row gy-4">

                    <!-- title -->
                    <div class="col-12">
                        <h1 class="text-center mb-5">RELATED ACTIVITIES & NEWS</h1>
                    </div>

                    <!-- card -->
                    <div class="col-12 col-md-4">
                        <div class="card news position-relative">
                            <img src="{{ asset('frontend/images/image_16.jpg') }}" style="height:250px" class="card-img-top" alt="image">
                            <div class="bg-light-green text-center text-white position-absolute top-0 end-0 m-3 px-2 rounded-pill"
                                 style="font-size: 0.8em;">ACTIVITIES & NEWS</div>
                            <div class="card-body">
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago |
                                        Computer Science</small>
                                </p>
                                <h5 class="card-title">GUB Computer Club Arranged a Webinar on Blockchain,
                                    Cryptos and
                                    NFTs
                                </h5>
                                <p class="card-text">
                                    A webinar on ‘Blockchain, Cryptos and NFTs – How they
                                </p>
                                <div class="text-center">
                                    <a href="#" class="btn btn-primary">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- card -->
                    <div class="col-12 col-md-4">
                        <div class="card news position-relative">
                            <img src="{{ asset('frontend/images/image_17.jpg') }}" style="height:250px" class="card-img-top" alt="image">
                            <div class="bg-light-green text-center text-white position-absolute top-0 end-0 m-3 px-2 rounded-pill"
                                 style="font-size: 0.8em;">ACTIVITIES & NEWS</div>
                            <div class="card-body">
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago |
                                        Computer Science</small>
                                </p>
                                <h5 class="card-title">GUB Computer Club Arranged a Webinar on Blockchain,
                                    Cryptos and
                                    NFTs
                                </h5>
                                <p class="card-text">
                                    A webinar on ‘Blockchain, Cryptos and NFTs – How they
                                </p>
                                <div class="text-center">
                                    <a href="#" class="btn btn-primary">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- card -->
                    <div class="col-12 col-md-4">
                        <div class="card news position-relative">
                            <img src="{{ asset('frontend/images/image_18.jpg') }}" style="height:250px" class="card-img-top" alt="image">
                            <div class="bg-light-green text-center text-white position-absolute top-0 end-0 m-3 px-2 rounded-pill"
                                 style="font-size: 0.8em;">ACTIVITIES & NEWS</div>
                            <div class="card-body">
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago |
                                        Computer Science</small>
                                </p>
                                <h5 class="card-title">GUB Computer Club Arranged a Webinar on Blockchain,
                                    Cryptos and
                                    NFTs
                                </h5>
                                <p class="card-text">
                                    A webinar on ‘Blockchain, Cryptos and NFTs – How they
                                </p>
                                <div class="text-center">
                                    <a href="#" class="btn btn-primary">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>


                </div> <!-- row -->
            </div> <!-- container -->
        </section> <!-- recent news -->


    </main> <!-- main -->

@endsection

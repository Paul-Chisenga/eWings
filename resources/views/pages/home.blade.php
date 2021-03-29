@extends('layouts.index')

@section('content')
    <x-navbar isDark />
    <!-- start slideshow-->
    <div class="container-fluid full-screen">
        <div class="row slider-fade">
            <div class="owl-carousel owl-theme">
                {{-- <div class="text-center item bg-img" data-overlay-dark="4"
                    data-background="{{ asset('img/ewings-08.jpg') }}">
                    <div class="display-table height-100 position-relative caption">
                        <div class="display-table-cell vertical-align-middle">
                            <h1 class="text-white">Your aviation training &</h1>
                            <h1 class="text-white">consulting partner</h1>
                            <p class="text-white margin-40px-bottom md-margin-30px-bottom xs-margin-25px-bottom center-col">
                                Many colleges and universities have designated mottos that represent the culture of that
                                institution identify themselves in a few words.</p>
                            <a href="/about" class="butn theme">
                                <span class="alt-font">Learn More</span><i
                                    class="fas fa-long-arrow-alt-right font-size16 sm-font-size14 margin-10px-left"></i>
                            </a>
                        </div>
                    </div>
                </div> --}}
                <div class="text-center item bg-img" data-overlay-dark="4"
                    data-background="img/placeholders/ewings-home.jpg">
                    <div class="display-table height-100 position-relative caption">
                        <div class="display-table-cell vertical-align-middle">
                            <div class="container">
                                <h2 class="text-white">Welcome to the home of Aviation Training and Consulting </h2>
                                {{-- <p class="text-white margin-40px-bottom md-margin-30px-bottom xs-margin-25px-bottom center-col">
                    Many colleges and universities have designated
                     mottos that represent the culture of that institution
                      identify themselves in a few words.</p> --}}
                                <a href="/about" class="butn medium theme">
                                    <span class="alt-font">Learn More</span><i
                                        class="fas fa-long-arrow-alt-right font-size16 sm-font-size14 margin-10px-left"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="text-center item bg-img" data-overlay-dark="4" data-background="img/ewings-04.jpg">
                    <div class="display-table height-100 position-relative caption">
                        <div class="display-table-cell vertical-align-middle">
                            <h1 class="text-white">Achieving Knowledge</h1>
                            <p class="text-white margin-40px-bottom md-margin-30px-bottom xs-margin-25px-bottom center-col">
                                Many colleges and universities have designated mottos that represent the culture of that
                                institution identify themselves in a few words.</p>
                            <a href="/about" class="butn medium theme">
                                <span class="alt-font">Learn More</span><i
                                    class="fas fa-long-arrow-alt-right font-size16 sm-font-size14 margin-10px-left"></i>
                            </a>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <!-- end slideshow-->
    <!-- Start Solutions -->
    <section class="no-padding-top facility-box facility-wrapper ">
        <div class="container">
            <div class="row facility-block">
                <div class="col-12 col-md-4 mb-1">
                    <div class="step bg-sky">
                        <a href="/solutions/unmannedAircraftSystems" class="text-center">
                            <i class="ti-cloud-down"></i>
                            <h4 class="step-title">Unmanned Aircraft Systems</h4>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-1">
                    <div class="step bg-green">
                        <a href="/solutions/consulting" class="text-center">
                            <i class="ti-check-box"></i>
                            <h4 class="step-title">Consulting</h4>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-1">
                    <div class="step bg-pink">
                        <a href="/solutions/training" class="text-center">
                            <i class="ti-mouse"></i>
                            <h4 class="step-title">Training</h4>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End Solution Section -->

    <!-- start about us section -->
    <section class="about-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-sm-12 order-2 order-lg-1">
                    <div class="padding-50px-right md-padding-40px-right sm-no-padding-right">
                        <h3
                            class="font-weight-500 font-size32 md-font-size28 sm-font-size26 xs-font-size24 margin-30px-bottom md-margin-25px-bottom sm-margin-20px-bottom text-theme-color">
                            Welcome to our school</h3>
                        <p
                            class="margin-30px-bottom md-margin-25px-bottom sm-margin-20px-bottom font-size16 line-height-30">
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                            printer took a galley of type and scrambled unchanged.</p>
                        <ul class="list-style5">
                            <li>Building our community</li>
                            <li>Book, library and store</li>
                        </ul>
                        <a class="butn fill margin-30px-top md-margin-25px-top sm-margin-20px-top" href="/about">Read
                            More <i class="fas fa-long-arrow-alt-right margin-10px-left"></i></a>
                    </div>
                </div>

                <div class="col-lg-7 col-sm-12 order-1 order-lg-2 sm-margin-40px-bottom xs-margin-30px-bottom">
                    <div class="row">
                        <div class="col-md-7 xs-margin-25px-bottom">
                            <div class="xs-text-center">
                                <img src="img/placeholders/ewings-10.jpg" alt="" class="border-radius-6" />
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="about-img">
                                <img src="img/placeholders/ewings-11.jpg" alt=""
                                    class="margin-30px-bottom sm-margin-25px-bottom border-radius-6" />
                                <img src="img/placeholders/ewings-12.jpg" alt="" class="border-radius-6" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end about us section -->

    <!-- Start Solutions details -->
    <section>
        <div class="row">
            <div class="col-12 center-col margin-50px-bottom sm-margin-30px-bottom text-center">
                <h3 class="font-weight-500 font-size32 md-font-size28 sm-font-size26 xs-font-size24 section-title text-theme-color">Why
                    Choose Our Solutions</h3>
                <div class="title-border"><span class="lg"></span><span class="md"></span><span class="sm"></span></div>
            </div>
        </div>
        <div class="container">
            <div class="horizontaltab tab-style1">
                <ul class="resp-tabs-list hor_1">
                    <li>Unmanned Aircraft System</li>
                    <li>Aviation Consultancy</li>
                    <li>Aviation Training</li>
                </ul>
                <div class="resp-tabs-container hor_1 no-padding">
                    <div>
                        <div class="row align-items-center">
                            <div class="col-lg-7 col-sm-12 order-2 order-lg-2">
                                <div class="padding-50px-right md-padding-40px-right sm-no-padding-right">
                                    <h3
                                        class="font-weight-500 font-size32 md-font-size28 sm-font-size26 xs-font-size24 margin-30px-bottom md-margin-25px-bottom sm-margin-20px-bottom text-theme-color">
                                        Why choose Unmanned Aircraft System solutions from us?
                                    </h3>
                                    <p
                                        class="margin-30px-bottom md-margin-25px-bottom sm-margin-20px-bottom font-size16 line-height-30">
                                        Unmanned Aircraft System (UAS), also referred to as Remotely Piloted Aircraft
                                        Systems (RPAS)
                                        services offered by our company are a tailored to meet any of your needs ranging
                                        from Aerial
                                        survey, photography, inspection, security and training in basic as well as
                                        specialized UAS
                                        programs. We provide you with comprehensive safety, compliance and risk management
                                        services for
                                        UAS operations.
                                    </p>
                                    <p
                                        class="margin-30px-bottom md-margin-25px-bottom sm-margin-20px-bottom font-size16 line-height-30">
                                        We are continuously involved with the latest research and industry updates. We can
                                        provide you
                                        with guidance on equipment, legislation and emerging technologies to help you gain
                                        competitive
                                        advantage, minimize operational risks, and ensure compliance against relevant
                                        national and
                                        international regulations.

                                    </p>
                                    <p
                                        class="margin-30px-bottom md-margin-25px-bottom sm-margin-20px-bottom font-size16 line-height-30">
                                        Contact us today to discuss your UAS requirements
                                    </p>
                                    <a class="butn fill margin-30px-top md-margin-25px-top sm-margin-20px-top" href="#">Book
                                        training online
                                        <i class="fas fa-long-arrow-alt-right margin-10px-left"></i></a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-sm-12 order-1 order-lg-1 sm-margin-40px-bottom xs-margin-30px-bottom">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="about-img">
                                            <img src="{{ asset('img/placeholders/ewings-04.jpg') }}" alt=""
                                                class="margin-30px-bottom sm-margin-25px-bottom border-radius-6" />
                                            <img src="{{ asset('img/placeholders/ewings-05.jpg') }}" alt=""
                                                class="border-radius-6" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="row align-items-center">
                            <div class="col-lg-7 col-sm-12 order-2 order-lg-2">
                                <div class="padding-50px-right md-padding-40px-right sm-no-padding-right">
                                    <h3
                                        class="font-weight-500 font-size32 md-font-size28 sm-font-size26 xs-font-size24 margin-30px-bottom md-margin-25px-bottom sm-margin-20px-bottom text-theme-color">
                                        Why choose aviation consultancy services from us?
                                    </h3>
                                    <p
                                        class="margin-30px-bottom md-margin-25px-bottom sm-margin-20px-bottom font-size16 line-height-30">
                                        We offer a fundamentally different and enlightened approach to Aviation training and
                                        consulting
                                        service. With a focus only in the aviation sector – we continue to pioneer industry
                                        best
                                        practice for world class performance for our clients ranging from Airlines, Civil
                                        Aviation
                                        Authorities, Air Navigation Service Providers, Airport Companies and Air Transport
                                        Business
                                        Service providers.
                                    </p>
                                    <p
                                        class="margin-30px-bottom md-margin-25px-bottom sm-margin-20px-bottom font-size16 line-height-30">
                                        When your operation relies on aviation support, you need to ensure that your
                                        contracted service
                                        providers are delivering a safe, efficient and reliable service. We offer
                                        comprehensive aviation
                                        consulting and assessment services to give you the support you need – wherever your
                                        operations
                                        are in the world. Best practice is at the core of our solutions.

                                    </p>
                                    <p
                                        class="margin-30px-bottom md-margin-25px-bottom sm-margin-20px-bottom font-size16 line-height-30">
                                        Contact us today to find out how we can support your business
                                    </p>
                                    <a class="butn fill margin-30px-top md-margin-25px-top sm-margin-20px-top" href="#">Book
                                        a
                                        Session
                                        <i class="fas fa-long-arrow-alt-right margin-10px-left"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-sm-12 order-1 order-lg-1 sm-margin-40px-bottom xs-margin-30px-bottom">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="about-img">
                                            <img src="{{ asset('img/placeholders/ewings-06.jpg') }}" alt=""
                                                class="margin-30px-bottom sm-margin-25px-bottom border-radius-6" />
                                            <img src="{{ asset('img/placeholders/ewings-07.jpg') }}" alt=""
                                                class="border-radius-6" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="row align-items-center ">
                            <div class="col-lg-7 col-sm-12 order-2 order-lg-2">
                                <div class="padding-50px-right md-padding-40px-right sm-no-padding-right">
                                    <h3
                                        class="font-weight-500 font-size32 md-font-size28 sm-font-size26 xs-font-size24 margin-30px-bottom md-margin-25px-bottom sm-margin-20px-bottom text-theme-color">
                                        Why choose aviation-training solutions from us?
                                    </h3>
                                    <p
                                        class="margin-30px-bottom md-margin-25px-bottom sm-margin-20px-bottom font-size16 line-height-30">
                                        Our training solutions are developed and delivered by a team of highly experienced
                                        aviation
                                        professionals to help Aviation entities and individuals improve personal competence
                                        and skills –
                                        core enablers of Aviation Safety and sustainable competitive advantage. Our needs
                                        driven
                                        training moves beyond theory, giving you valuable real-world insights. You can trust
                                        us to
                                        provide high-quality, consistent training and development at every level of your
                                        organization –
                                        anywhere in the world.
                                    </p>
                                    <p
                                        class="margin-30px-bottom md-margin-25px-bottom sm-margin-20px-bottom font-size16 line-height-30">
                                        We have a wide range of open, in-house, eLearning, virtual learning and blended
                                        course ideal for
                                        the world’s largest companies and recognized organizations to the smallest
                                        organization.

                                    </p>
                                    <p
                                        class="margin-30px-bottom md-margin-25px-bottom sm-margin-20px-bottom font-size16 line-height-30">
                                        Contact us today to find out how training can support your business.
                                    </p>

                                    <a class="butn fill margin-30px-top md-margin-25px-top sm-margin-20px-top" href="#">Book
                                        training online
                                        <i class="fas fa-long-arrow-alt-right margin-10px-left"></i></a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-sm-12 order-1 order-lg-1 sm-margin-40px-bottom xs-margin-30px-bottom">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="about-img">
                                            <img src="{{ asset('img/placeholders/ewings-02.jpg') }}" alt=""
                                                class="margin-30px-bottom sm-margin-25px-bottom border-radius-6" />
                                            <img src="{{ asset('img/placeholders/ewings-03.jpg') }}" alt=""
                                                class="border-radius-6" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Solutions details section -->

    <!-- start course area section -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 center-col margin-50px-bottom md-margin-40px-bottom xs-margin-30px-bottom text-center text-theme-color">
                    <h3 class="font-weight-500 font-size32 md-font-size28 sm-font-size26 xs-font-size24 section-title">
                        Our Courses</h3>
                    <div class="title-border"><span class="lg"></span><span class="sm"></span></div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 sm-margin-30px-bottom xs-margin-25px-bottom">
                    <div class="courses-block">
                        <div>
                            <a href="course-details.html"><img src="{{ asset('img/placeholders/ewings-courses-01.jpg') }}"
                                    alt="" /></a>
                        </div>
                        <div class="courses-content">
                            <div class="courses-title display-inline-block">
                                <h4 class="font-size22 md-font-size20 xs-font-size18 font-weight-500 margin-10px-bottom"><a
                                        href="course-details.html" class="text-black">Computer Science</a></h4>
                                <div class="courses-icon display-inline-block margin-20px-bottom sm-margin-15px-bottom">
                                    <span class="margin-10px-right font-size14 xs-font-size12">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </span>
                                    <span>5</span>
                                    <span>(20)</span>
                                </div>
                            </div>

                            <p class="no-margin-bottom font-size16 md-font-size15 line-height-28">Lorem ipsum dolor sit amet
                                mollis felis dapibus arcu donec viverra.</p>
                        </div>
                        <div class="courses-box-bottom">
                            <div class="courses-pricing-3">
                                <span>$180</span>
                            </div>
                            <div class="courses-single-icon">
                                <i class="far fa-heart margin-5px-right text-theme-color font-size16"></i>
                                <span class="font-size16">79</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 sm-margin-30px-bottom xs-margin-25px-bottom">
                    <div class="courses-block">
                        <div>
                            <a href="course-details.html"><img src="{{ asset('img/placeholders/ewings-courses-02.jpg') }}"
                                    alt="" /></a>
                        </div>
                        <div class="courses-content">
                            <div class="courses-title display-inline-block">
                                <h4 class="font-size22 md-font-size20 xs-font-size18 font-weight-500 margin-10px-bottom"><a
                                        href="course-details.html" class="text-black">Marketing Business</a></h4>
                                <div class="courses-icon display-inline-block margin-20px-bottom sm-margin-15px-bottom">
                                    <span class="margin-10px-right text-theme-color font-size14 xs-font-size12">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </span>
                                    <span>4</span>
                                    <span>(26)</span>
                                </div>
                            </div>

                            <p class="no-margin-bottom font-size16 md-font-size15 line-height-28">Lorem ipsum dolor sit amet
                                mollis felis dapibus arcu donec viverra.</p>
                        </div>
                        <div class="courses-box-bottom">
                            <div class="courses-pricing-3 display-inline-block">
                                <span>$140</span>
                            </div>
                            <div class="courses-single-icon">
                                <i class="far fa-heart margin-5px-right text-theme-color font-size16"></i>
                                <span class="font-size16">63</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="courses-block">
                        <div>
                            <a href="course-details.html"><img src="{{ asset('img/placeholders/ewings-courses-03.jpg') }}"
                                    alt="" /></a>
                        </div>
                        <div class="courses-content">
                            <div class="courses-title display-inline-block">
                                <h4 class="font-size22 md-font-size20 xs-font-size18 font-weight-500 margin-10px-bottom"><a
                                        href="course-details.html" class="text-black">Architecture Design</a></h4>
                                <div class="courses-icon display-inline-block margin-20px-bottom sm-margin-15px-bottom">
                                    <span class="margin-10px-right text-theme-color font-size14 xs-font-size12">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </span>
                                    <span>4</span>
                                    <span>(18)</span>
                                </div>
                            </div>

                            <p class="no-margin-bottom font-size16 md-font-size15 line-height-28">Lorem ipsum dolor sit amet
                                mollis felis dapibus arcu donec viverra.</p>
                        </div>
                        <div class="courses-box-bottom">
                            <div class="courses-pricing-3 display-inline-block">
                                <span>$190</span>
                            </div>
                            <div class="courses-single-icon">
                                <i class="far fa-heart margin-5px-right text-theme-color font-size16"></i>
                                <span class="font-size16">85</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-column align-items-center py-4">
                <a class="butn fill margin-30px-top md-margin-25px-top sm-margin-20px-top" href="/solutions/training">
                    All Courses
                    <i class="fas fa-long-arrow-alt-right margin-10px-left"></i></a>
            </div>
        </div>
    </section>
    <!-- end course area section -->

@endsection

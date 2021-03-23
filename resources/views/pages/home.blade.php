@extends('layouts.index')

@section('content')
    <x-navbar isDark />
    <!-- start slideshow-->
    <div class="container-fluid full-screen">
        <div class="row slider-fade" >
            <div class="owl-carousel owl-theme" >
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
                <div class="text-center item bg-img" data-overlay-dark="4" data-background="img/ewings-02.png">
                    <div class="display-table height-100 position-relative caption">
                        <div class="display-table-cell vertical-align-middle">
                            <h1 class="text-white px-5">Welcome to the home of Aviation Training and Consulting </h1>
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
                        <a href="/solutions/aviationSafety" class="text-center">
                            <i class="ti-cloud-down"></i>
                            <h4 class="step-title">Unmanned Aircraft Systems</h4>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-1">
                    <div class="step bg-green">
                        <a href="/solutions/aviationBusiness" class="text-center">
                            <i class="ti-check-box"></i>
                            <h4 class="step-title">Consulting</h4>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-1">
                    <div class="step bg-pink">
                        <a href="/solutions/law" class="text-center">
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
                <div class="col-lg-7 col-sm-12 order-2 order-lg-1">
                    <div class="padding-50px-right md-padding-40px-right sm-no-padding-right">
                        <h3
                            class="font-weight-500 font-size32 md-font-size28 sm-font-size26 xs-font-size24 margin-30px-bottom md-margin-25px-bottom sm-margin-20px-bottom text-theme-color">
                            Why choose aviation consultancy services from us?
                        </h3>
                        <p
                            class="margin-30px-bottom md-margin-25px-bottom sm-margin-20px-bottom font-size16 line-height-30">
                            We offer a fundamentally different and enlightened approach to Aviation training and consulting
                            service. With a focus only in the aviation sector – we continue to pioneer industry best
                            practice for world class performance for our clients ranging from Airlines, Civil Aviation
                            Authorities, Air Navigation Service Providers, Airport Companies and Air Transport Business
                            Service providers.
                        </p>
                        <p
                            class="margin-30px-bottom md-margin-25px-bottom sm-margin-20px-bottom font-size16 line-height-30">
                            When your operation relies on aviation support, you need to ensure that your contracted service
                            providers are delivering a safe, efficient and reliable service. We offer comprehensive aviation
                            consulting and assessment services to give you the support you need – wherever your operations
                            are in the world. Best practice is at the core of our solutions.

                        </p>
                        <p
                            class="margin-30px-bottom md-margin-25px-bottom sm-margin-20px-bottom font-size16 line-height-30">
                            Contact us today to find out how we can support your business
                        </p>
                        {{-- <ul class="list-style5">
                            <li>Building our community</li>
                            <li>Book, library and store</li>
                        </ul> --}}
                        <a class="butn fill margin-30px-top md-margin-25px-top sm-margin-20px-top" href="#">Book a
                            Session
                            <i class="fas fa-long-arrow-alt-right margin-10px-left"></i></a>
                    </div>
                </div>

                <div class="col-lg-5 col-sm-12 order-1 order-lg-2 sm-margin-40px-bottom xs-margin-30px-bottom">
                    <div class="row">
                        <div class="col-md-12 xs-margin-25px-bottom">
                            <div class="xs-text-center">
                                <img src="{{ asset('img/content/about01.jpg') }}" alt="" class="border-radius-6" />
                            </div>
                        </div>
                        {{-- <div class="col-md-5">
                            <div class="about-img">
                                <img src="{{ asset('img/content/about02.jpg') }}" alt=""
                                    class="margin-30px-bottom sm-margin-25px-bottom border-radius-6" />
                                <img src="{{ asset('img/content/about03.jpg') }}" alt="" class="border-radius-6" />
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end about us section -->
    <!-- start about us section -->
    <section class="about-section pt-0">
        <div class="container">
            <div class="row ">
                <div class="col-lg-8 col-sm-12 order-2 order-lg-2">
                    <div class="padding-50px-right md-padding-40px-right sm-no-padding-right">
                        <h3
                            class="font-weight-500 font-size32 md-font-size28 sm-font-size26 xs-font-size24 margin-30px-bottom md-margin-25px-bottom sm-margin-20px-bottom text-theme-color">
                            Why choose aviation-training solutions from us?
                        </h3>
                        <p
                            class="margin-30px-bottom md-margin-25px-bottom sm-margin-20px-bottom font-size16 line-height-30">
                            Our training solutions are developed and delivered by a team of highly experienced aviation
                            professionals to help Aviation entities and individuals improve personal competence and skills –
                            core enablers of Aviation Safety and sustainable competitive advantage. Our needs driven
                            training moves beyond theory, giving you valuable real-world insights. You can trust us to
                            provide high-quality, consistent training and development at every level of your organization –
                            anywhere in the world.
                        </p>
                        <p
                            class="margin-30px-bottom md-margin-25px-bottom sm-margin-20px-bottom font-size16 line-height-30">
                            We have a wide range of open, in-house, eLearning, virtual learning and blended course ideal for
                            the world’s largest companies and recognized organizations to the smallest organization.

                        </p>
                        <p
                            class="margin-30px-bottom md-margin-25px-bottom sm-margin-20px-bottom font-size16 line-height-30">
                            Contact us today to find out how training can support your business.
                        </p>
                        {{-- <ul class="list-style5">
                            <li>Building our community</li>
                            <li>Book, library and store</li>
                        </ul> --}}
                        <a class="butn fill margin-30px-top md-margin-25px-top sm-margin-20px-top" href="#">Book
                            training online
                            <i class="fas fa-long-arrow-alt-right margin-10px-left"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-12 order-1 order-lg-1 sm-margin-40px-bottom xs-margin-30px-bottom">
                    <div class="row">
                        {{-- <div class="col-md-7 xs-margin-25px-bottom">
                            <div class="xs-text-center">
                                <img src="{{ asset('img/content/about01.jpg') }}" alt="" class="border-radius-6" />
                            </div>
                        </div> --}}
                        <div class="col-md-12">
                            <div class="about-img">
                                <img src="{{ asset('img/content/about02.jpg') }}" alt=""
                                    class="margin-30px-bottom sm-margin-25px-bottom border-radius-6" />
                                <img src="{{ asset('img/content/about03.jpg') }}" alt="" class="border-radius-6" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end about us section -->
    <!-- start about us section -->
    <section class="about-section pt-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-12 order-2 order-lg-1">
                    <div class="padding-50px-right md-padding-40px-right sm-no-padding-right">
                        <h3
                            class="font-weight-500 font-size32 md-font-size28 sm-font-size26 xs-font-size24 margin-30px-bottom md-margin-25px-bottom sm-margin-20px-bottom text-theme-color">
                            Why choose Unmanned Aircraft System solutions from us?
                        </h3>
                        <p
                            class="margin-30px-bottom md-margin-25px-bottom sm-margin-20px-bottom font-size16 line-height-30">
                            Unmanned Aircraft System (UAS), also referred to as Remotely Piloted Aircraft Systems (RPAS)
                            services offered by our company are a tailored to meet any of your needs ranging from Aerial
                            survey, photography, inspection, security and training in basic as well as specialized UAS
                            programs. We provide you with comprehensive safety, compliance and risk management services for
                            UAS operations.
                        </p>
                        <p
                            class="margin-30px-bottom md-margin-25px-bottom sm-margin-20px-bottom font-size16 line-height-30">
                            We are continuously involved with the latest research and industry updates. We can provide you
                            with guidance on equipment, legislation and emerging technologies to help you gain competitive
                            advantage, minimize operational risks, and ensure compliance against relevant national and
                            international regulations.

                        </p>
                        <p
                            class="margin-30px-bottom md-margin-25px-bottom sm-margin-20px-bottom font-size16 line-height-30">
                            Contact us today to discuss your UAS requirements
                        </p>
                        {{-- <ul class="list-style5">
                            <li>Building our community</li>
                            <li>Book, library and store</li>
                        </ul> --}}
                        <a class="butn fill margin-30px-top md-margin-25px-top sm-margin-20px-top" href="#">Book
                            training online
                            <i class="fas fa-long-arrow-alt-right margin-10px-left"></i></a>
                    </div>
                </div>

                <div class="col-lg-6 col-sm-12 order-1 order-lg-2 sm-margin-40px-bottom xs-margin-30px-bottom">
                    <div class="row">
                        <div class="col-md-7 xs-margin-25px-bottom">
                            <div class="xs-text-center">
                                <img src="{{ asset('img/content/about01.jpg') }}" alt="" class="border-radius-6" />
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="about-img">
                                <img src="{{ asset('img/content/about02.jpg') }}" alt=""
                                    class="margin-30px-bottom sm-margin-25px-bottom border-radius-6" />
                                <img src="{{ asset('img/content/about03.jpg') }}" alt="" class="border-radius-6" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end about us section -->
@endsection

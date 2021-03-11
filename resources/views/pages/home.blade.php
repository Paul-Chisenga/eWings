@extends('layouts.index')

@section('content')
<!-- start slideshow-->
<div class="container-fluid full-screen">
    <div class="row slider-fade">
        <div class="owl-carousel owl-theme">
            <div class="text-center item bg-img" data-overlay-dark="4" data-background="{{asset('img/ewings-08.jpg')}}">
                <div class="display-table height-100 position-relative caption">
                    <div class="display-table-cell vertical-align-middle">
                        <h1 class="text-white">Your aviation training &</h1>
                        <h1 class="text-white">consulting partner</h1>
                        <p class="text-white margin-40px-bottom md-margin-30px-bottom xs-margin-25px-bottom center-col">Many colleges and universities have designated mottos that represent the culture of that institution identify themselves in a few words.</p>
                        <a href="/about" class="butn theme">
                            <span class="alt-font">Learn More</span><i class="fas fa-long-arrow-alt-right font-size16 sm-font-size14 margin-10px-left"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="text-center item bg-img" data-overlay-dark="4" data-background="img/ewings-02.png">
                <div class="display-table height-100 position-relative caption">
                    <div class="display-table-cell vertical-align-middle">
                        <h1 class="text-white">Education For Better</h1>
                        <p class="text-white margin-40px-bottom md-margin-30px-bottom xs-margin-25px-bottom center-col">Many colleges and universities have designated mottos that represent the culture of that institution identify themselves in a few words.</p>
                        <a href="/about" class="butn medium theme">
                            <span class="alt-font">Learn More</span><i class="fas fa-long-arrow-alt-right font-size16 sm-font-size14 margin-10px-left"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="text-center item bg-img" data-overlay-dark="4" data-background="img/ewings-04.jpg">
                <div class="display-table height-100 position-relative caption">
                    <div class="display-table-cell vertical-align-middle">
                        <h1 class="text-white">Achieving Knowledge</h1>
                        <p class="text-white margin-40px-bottom md-margin-30px-bottom xs-margin-25px-bottom center-col">Many colleges and universities have designated mottos that represent the culture of that institution identify themselves in a few words.</p>
                        <a href="/about" class="butn medium theme">
                            <span class="alt-font">Learn More</span><i class="fas fa-long-arrow-alt-right font-size16 sm-font-size14 margin-10px-left"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- end slideshow-->
<!-- start facility section -->
<section class="no-padding-top facility-box facility-wrapper ">
    <div class="container">
        <div class="row facility-block">
            <div class="col-12">
                <div class="owl-carousel owl-theme">

                    <div class="step bg-blue">
                        <a href="/department/aviation" class="text-center">
                            <i class="ti-eraser"></i>
                            <h4 class="step-title">Aviation</h4>
                        </a>
                    </div>
                    <div class="step bg-sky">
                        <a href="/department/engineering" class="text-center">
                            <i class="ti-cloud-down"></i>
                            <h4 class="step-title">Engineering</h4>
                        </a>
                    </div>
                    <div class="step bg-green">
                        <a href="/department/medical" class="text-center">
                            <i class="ti-check-box"></i>
                            <h4 class="step-title">Medical</h4>
                        </a>
                    </div>
                    <div class="step bg-pink">
                        <a href="/department/law" class="text-center">
                            <i class="ti-mouse"></i>
                            <h4 class="step-title">Law</h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end facility section -->
<!-- start about us section -->
<section class="about-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-sm-12 order-2 order-lg-1">
                <div class="padding-50px-right md-padding-40px-right sm-no-padding-right">
                    <h3 class="font-weight-500 font-size32 md-font-size28 sm-font-size26 xs-font-size24 margin-30px-bottom md-margin-25px-bottom sm-margin-20px-bottom text-theme-color">Welcome to our campus</h3>
                    <p class="margin-30px-bottom md-margin-25px-bottom sm-margin-20px-bottom font-size16 line-height-30">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled unchanged.</p>
                    <ul class="list-style5">
                        <li>Building our community</li>
                        <li>Book, library and store</li>
                    </ul>
                    <a class="butn fill margin-30px-top md-margin-25px-top sm-margin-20px-top" href="/about">Read More <i class="fas fa-long-arrow-alt-right margin-10px-left"></i></a>
                </div>
            </div>

            <div class="col-lg-7 col-sm-12 order-1 order-lg-2 sm-margin-40px-bottom xs-margin-30px-bottom">
                <div class="row">
                    <div class="col-md-7 xs-margin-25px-bottom">
                        <div class="xs-text-center">
                            <img src="{{asset('img/content/about01.jpg')}}" alt="" class="border-radius-6" />
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="about-img">
                            <img src="{{asset('img/content/about02.jpg')}}" alt="" class="margin-30px-bottom sm-margin-25px-bottom border-radius-6" />
                            <img src="{{asset('img/content/about03.jpg')}}" alt="" class="border-radius-6" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end about us section -->

<!-- start event section -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-12 center-col margin-50px-bottom sm-margin-40px-bottom text-center">
                <h3 class="font-weight-500 font-size32 md-font-size28 sm-font-size26 xs-font-size24 section-title">Our Events</h3>
                <div class="title-border"><span class="lg"></span><span class="md"></span><span class="sm"></span></div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 margin-30px-bottom xs-margin-25px-bottom">
                <div class="events-block bg-light-gray height-100 border-radius-6">
                    <div class="col-left">
                        <div class="position-relative overflow-hidden">
                            <img src="{{asset('img/events/event1.jpg')}}" alt="">
                        </div>
                        <div class="event-date">
                            <div class="font-size22 md-font-size20 xs-font-size18 font-weight-600">10</div>
                            <div class="font-size16 font-weight-600 line-height-1">Mar</div>
                        </div>
                    </div>
                    <div class="col-right">
                        <div class="padding-30px-lr xs-padding-20px-lr xs-padding-20px-tb display-table-cell vertical-align-middle height-100">
                            <div class="margin-20px-bottom md-margin-15px-bottom">
                                <h4 class="margin-5px-bottom font-size22 md-font-size20 xs-font-size18 font-weight-500"><a href="event-details.html" class="text-theme-color">Business Conference</a></h4>
                                <p class="no-margin-bottom font-weight-600"><i class="ti-timer padding-10px-right"></i>01:30 PM - 04:30 PM</p>
                            </div>
                            <p class="margin-20px-bottom md-margin-15px-bottom">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut fugit.</p>
                            <p class="no-margin-bottom">Speaker : <span class="font-weight-600">John Sminth</span></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 margin-30px-bottom xs-margin-25px-bottom">
                <div class="events-block bg-light-gray height-100 border-radius-6">
                    <div class="col-left">
                        <div class="position-relative overflow-hidden">
                            <img src="{{asset('img/events/event2.jpg')}}" alt="">
                        </div>
                        <div class="event-date">
                            <div class="font-size22 md-font-size20 xs-font-size18 font-weight-600">25</div>
                            <div class="font-size16 font-weight-600 line-height-1">Feb</div>
                        </div>
                    </div>
                    <div class="col-right">
                        <div class="padding-30px-lr xs-padding-20px-lr xs-padding-20px-tb display-table-cell vertical-align-middle height-100">
                            <div class="margin-20px-bottom md-margin-15px-bottom">
                                <h4 class="margin-5px-bottom font-size22 md-font-size20 xs-font-size18 font-weight-500"><a href="event-details.html" class="text-theme-color">Craft Workshops</a></h4>
                                <p class="no-margin-bottom font-weight-600"><i class="ti-timer padding-10px-right"></i>09:00 AM - 09:30 PM</p>
                            </div>
                            <p class="margin-20px-bottom md-margin-15px-bottom">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut fugit.</p>
                            <p class="no-margin-bottom">Speaker : <span class="font-weight-600">Alexa Zone</span></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 sm-margin-30px-bottom xs-margin-25px-bottom">
                <div class="events-block bg-light-gray height-100 border-radius-6">
                    <div class="col-left">
                        <div class="position-relative overflow-hidden">
                            <img src="{{asset('img/events/event3.jpg')}}" alt="">
                        </div>
                        <div class="event-date">
                            <div class="font-size22 md-font-size20 xs-font-size18 font-weight-600">20</div>
                            <div class="font-size16 font-weight-600 line-height-1">Feb</div>
                        </div>
                    </div>
                    <div class="col-right">
                        <div class="padding-30px-lr xs-padding-20px-lr xs-padding-20px-tb display-table-cell vertical-align-middle height-100">
                            <div class="margin-20px-bottom md-margin-15px-bottom">
                                <h4 class="margin-5px-bottom font-size22 md-font-size20 xs-font-size18 font-weight-500"><a href="event-details.html" class="text-theme-color">Mentorship Program</a></h4>
                                <p class="no-margin-bottom font-weight-600"><i class="ti-timer padding-10px-right"></i>09:20 AM - 12:00 AM</p>
                            </div>
                            <p class="margin-20px-bottom md-margin-15px-bottom">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut fugit.</p>
                            <p class="no-margin-bottom">Speaker : <span class="font-weight-600">Avil Mex</span></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="events-block bg-light-gray height-100 border-radius-6">
                    <div class="col-left">
                        <div class="position-relative overflow-hidden">
                            <img src="{{asset('img/events/event4.jpg')}}" alt="">
                        </div>
                        <div class="event-date">
                            <div class="font-size22 md-font-size20 xs-font-size18 font-weight-600">25</div>
                            <div class="font-size16 font-weight-600 line-height-1">Sep</div>
                        </div>
                    </div>
                    <div class="col-right">
                        <div class="padding-30px-lr xs-padding-20px-lr xs-padding-20px-tb display-table-cell vertical-align-middle height-100">
                            <div class="margin-20px-bottom md-margin-15px-bottom">
                                <h4 class="margin-5px-bottom font-size22 md-font-size20 xs-font-size18 font-weight-500"><a href="event-details.html" class="text-theme-color">Technical Events</a></h4>
                                <p class="no-margin-bottom font-weight-600"><i class="ti-timer padding-10px-right"></i>10:00 AM - 09:00 PM</p>
                            </div>
                            <p class="margin-20px-bottom md-margin-15px-bottom">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut fugit.</p>
                            <p class="no-margin-bottom">Speaker : <span class="font-weight-600">Venil Monts</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end event section -->
<!-- start testimonials section -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-12 center-col margin-50px-bottom sm-margin-40px-bottom text-center">
                <h3 class="font-weight-500 font-size32 md-font-size28 sm-font-size26 xs-font-size24 section-title">What Parents Say</h3>
                <div class="title-border"><span class="lg"></span><span class="md"></span><span class="sm"></span></div>
            </div>
        </div>
        <div class="testimonial-style1 owl-theme owl-carousel" data-slider-id="1">
            <div class="text-center">
                <div class="testmonial-text">
                    <p class="font-size18 sm-font-size16 line-height-35 xs-line-height-28 margin-30px-bottom sm-margin-25px-bottom xs-margin-20px-bottom">Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque inventore veritatis et quasi architecto beatae.</p>
                    <h5 class="margin-5px-bottom font-size18 xs-font-size16"><a href="#" class="text-theme-color">Stepha Kruse</a></h5>
                    <h6 class="font-size14 xs-font-size13 letter-spacing-1 font-weight-500 opacity6 no-margin-bottom">Designer</h6>
                </div>
            </div>
            <div class="text-center">
                <div class="testmonial-text">
                    <p class="font-size18 sm-font-size16 line-height-35 xs-line-height-28 margin-30px-bottom sm-margin-25px-bottom xs-margin-20px-bottom">Aerspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque inventore veritatis et quasi architecto beatae.</p>
                    <h5 class="margin-5px-bottom font-size18 xs-font-size16"><a href="#" class="text-theme-color">Dunican keithly</a></h5>
                    <h6 class="font-size14 xs-font-size13 letter-spacing-1 font-weight-500 opacity6 no-margin-bottom">Networking</h6>
                </div>
            </div>
            <div class="text-center">
                <div class="testmonial-text">
                    <p class="font-size18 sm-font-size16 line-height-35 xs-line-height-28 margin-30px-bottom sm-margin-25px-bottom xs-margin-20px-bottom">Rerspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque inventore veritatis et quasi architecto beatae.</p>
                    <h5 class="margin-5px-bottom font-size18 xs-font-size16"><a href="#" class="text-theme-color">Alivin Corondo</a></h5>
                    <h6 class="font-size14 xs-font-size13 letter-spacing-1 font-weight-500 opacity6 no-margin-bottom">Developer</h6>
                </div>
            </div>
        </div>
        <div class="owl-thumbs text-center" data-slider-id="1">
            <button class="owl-thumb-item border-radius-50 width-60px sm-width-50px xs-width-40px margin-5px-right"><img src="img/testmonials/t-7.jpg" class="border-radius-50" alt="" /></button>
            <button class="owl-thumb-item width-60px border-radius-50 sm-width-50px xs-width-40px margin-5px-right"><img src="img/testmonials/t-8.jpg" class="border-radius-50" alt="" /></button>
            <button class="owl-thumb-item width-60px sm-width-50px xs-width-40px border-radius-50"><img src="img/testmonials/t-9.jpg" class="border-radius-50" alt="" /></button>
        </div>
    </div>
</section>
<!-- end testimonials section -->

<!--start news section -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-12 center-col margin-50px-bottom sm-margin-40px-bottom text-center">
                <h3 class="font-weight-500 font-size32 md-font-size28 sm-font-size26 xs-font-size24 section-title">Latest news</h3>
                <div class="title-border"><span class="lg"></span><span class="md"></span><span class="sm"></span></div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 sm-margin-30px-bottom xs-margin-25px-bottom">
                <div class="blog-block">
                    <div>
                        <img src="{{asset('img/blog/blog1.jpg')}}" alt="" />
                    </div>
                    <div class="blog-content">
                        <a href="javascript:void(0)" class="blog-text font-size16 xs-font-size14 font-weight-500">Education</a>
                        <h4 class="font-size20 md-font-size18 font-weight-500 line-height-30 margin-15px-tb"><a href="blog-post.html" class="text-theme-color">15 days satisfaction seminar education</a></h4>
                        <p class="no-margin-bottom">3 March, 2020 - by <a href="javascript:void(0)" class="blog-text font-weight-500">Sminth</a></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 sm-margin-30px-bottom xs-margin-25px-bottom">
                <div class="blog-block">
                    <div>
                        <img src="{{asset('img/blog/blog2.jpg')}}" alt="" />
                    </div>
                    <div class="blog-content">
                        <a href="javascript:void(0)" class="blog-text font-size16 xs-font-size14 font-weight-500">Knowledge</a>
                        <h4 class="font-size20 md-font-size18 font-weight-500 line-height-30 margin-15px-tb"><a href="blog-post.html" class="text-theme-color">Expand your confidence knowledge</a></h4>
                        <p class="no-margin-bottom">25 February, 2020 - by <a href="javascript:void(0)" class="blog-text font-weight-500">Jarale</a></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="blog-block">
                    <div>
                        <img src="{{asset('img/blog/blog3.jpg')}}" alt="" />
                    </div>
                    <div class="blog-content">
                        <a href="javascript:void(0)" class="blog-text font-size16 xs-font-size14 font-weight-500">Students</a>
                        <h4 class="font-size20 md-font-size18 font-weight-500 line-height-30 margin-15px-tb"><a href="blog-post.html" class="text-theme-color">How i use my planner as a student</a></h4>
                        <p class="no-margin-bottom">20 February, 2020 - by <a href="javascript:void(0)" class="blog-text font-weight-500">John</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end news section-->



@endsection

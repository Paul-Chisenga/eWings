@extends('layouts.index')

@section('content')
<x-pagetitle name="Departments" imgUrl="img/ewings-05.png" />
<!-- start event section -->
<section>
    <div class="container">

        <!-- start event block -->
        <div class="row align-items-center event-block no-gutters margin-40px-bottom">
            <div class="col-lg-5 col-sm-12">
                <div class="position-relative">
                    <img src="{{asset('img/events/event-01.jpg')}}" alt="" />
                    <div class="events-date">
                        <div class="font-size28">05</div>
                        <div class="font-size14">Years</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-sm-12">
                <div class="padding-60px-lr md-padding-50px-lr sm-padding-30px-all xs-padding-25px-all">
                    <h5 class="margin-15px-bottom md-margin-10px-bottom font-size22 md-font-size20 xs-font-size18 font-weight-500"><a href="/department/aviation" class="text-theme-color">Aviation</a></h5>
                    <ul class="event-time margin-10px-bottom md-margin-5px-bottom">
                        <li><i class="fas fa-user margin-5px-right"></i> Currently Admitting</li>
                        <li><i class="far fa-calendar-alt margin-10px-right"></i> 2nd March - 2April</li>
                    </ul>
                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore</p>
                    <a class="butn small margin-10px-top md-no-margin-top" href="/department/aviation">Read More <i class="fas fa-long-arrow-alt-right margin-10px-left"></i></a>
                </div>
            </div>
        </div>
        <!-- end event block -->

        <!-- start event block -->
        <div class="row align-items-center event-block no-gutters margin-40px-bottom">
            <div class="col-lg-7 order-2 order-lg-1">
                <div class="padding-60px-lr md-padding-50px-lr sm-padding-30px-all xs-padding-25px-all">
                    <h5 class="margin-15px-bottom md-margin-10px-bottom font-size22 md-font-size20 xs-font-size18 font-weight-500"><a href="/department/engineering" class="text-theme-color">Engineering</a></h5>
                    <ul class="event-time margin-10px-bottom md-margin-5px-bottom">
                        <li><i class="fas fa-user margin-5px-right"></i> Adminssion</li>
                        <li><i class="fas fa-calendar-alt margin-5px-right"></i> 2nd March - 2April</li>
                    </ul>
                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore</p>
                    <a class="butn small margin-10px-top md-no-margin-top" href="/department/engineering">Read More <i class="fas fa-long-arrow-alt-right margin-10px-left"></i></a>
                </div>
            </div>
            <div class="col-lg-5 order-1 order-lg-2">
                <div class="position-relative">
                    <img src="img/events/event-02.jpg" alt="" />
                    <div class="events-date">
                        <div class="font-size28">04</div>
                        <div class="font-size14">Years</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end event block -->

        <!-- start event block -->
        <div class="row align-items-center event-block no-gutters margin-40px-bottom">
            <div class="col-lg-5 col-sm-12">
                <div class="position-relative">
                    <img src="{{asset('img/events/event-01.jpg')}}" alt="" />
                    <div class="events-date">
                        <div class="font-size28">04</div>
                        <div class="font-size14">Years</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-sm-12">
                <div class="padding-60px-lr md-padding-50px-lr sm-padding-30px-all xs-padding-25px-all">
                    <h5 class="margin-15px-bottom md-margin-10px-bottom font-size22 md-font-size20 xs-font-size18 font-weight-500"><a href="/department/medical" class="text-theme-color">Medical</a></h5>
                    <ul class="event-time margin-10px-bottom md-margin-5px-bottom">
                        <li><i class="fas fa-user margin-5px-right"></i>Admisiion</li>
                        <li><i class="far fa-calendar-alt margin-10px-right"></i> 2nd March - 2April</li>
                    </ul>
                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore</p>
                    <a class="butn small margin-10px-top md-no-margin-top" href="/department/medical">Read More <i class="fas fa-long-arrow-alt-right margin-10px-left"></i></a>
                </div>
            </div>
        </div>
        <!-- end event block -->

        <!-- start event block -->
        <div class="row align-items-center event-block no-gutters margin-40px-bottom">
            <div class="col-lg-7 order-2 order-lg-1">
                <div class="padding-60px-lr md-padding-50px-lr sm-padding-30px-all xs-padding-25px-all">
                    <h5 class="margin-15px-bottom md-margin-10px-bottom font-size22 md-font-size20 xs-font-size18 font-weight-500"><a href="/department/law" class="text-theme-color">Law</a></h5>
                    <ul class="event-time margin-10px-bottom md-margin-5px-bottom">
                        <li><i class="fas fa-user margin-5px-right"></i> Adminssion</li>
                        <li><i class="fas fa-calendar-alt margin-5px-right"></i> 2nd March - 2April</li>
                    </ul>
                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore</p>
                    <a class="butn small margin-10px-top md-no-margin-top" href="/department/law">Read More <i class="fas fa-long-arrow-alt-right margin-10px-left"></i></a>
                </div>
            </div>
            <div class="col-lg-5 order-1 order-lg-2">
                <div class="position-relative">
                    <img src="img/events/event-02.jpg" alt="" />
                    <div class="events-date">
                        <div class="font-size28">04</div>
                        <div class="font-size14">Years</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end event block -->

    </div>
</section>
<!-- end event section -->
@endsection

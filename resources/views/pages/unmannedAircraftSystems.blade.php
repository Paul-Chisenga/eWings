@extends('layouts.index')

@section('content')
    <x-pagetitle name="Unmanned Aircraft Systems" imgUrl="img/ewings-05.png" />
    <!-- start event-details section -->
    <section>
        <div class="container">
            <div class="row">
                <!--  start event left-->
                <div class="col-lg-8 col-md-12 sm-margin-40px-bottom">
                    <div class="padding-30px-right md-padding-30px-right sm-no-padding-right">

                        <div class="margin-30px-bottom sm-margin-30px-bottom">
                            <div class="event-img">
                                <img src="{{ asset('img/events/eventdetail-1.jpg') }}" alt="Event">
                            </div>
                        </div>
                        <h4 class="margin-15px-bottom font-weight-500">Program Details</h4>
                        <p>Drones or unmanned aircraft systems (UAS) are changing the way of life all over the world. While
                            working with government agencies, ewings is committed to walking with you on your journey
                            towards full compliance with government requirements and providing modern day solutions to
                            todays’ problems. Safety, security and respect for privacy are top priorities in all of our
                            engagements.
                        </p>
                        <h5 class="margin-15px-bottom font-weight-500">What you need to know </h5>
                        <p>Got a drone? Whether you're a novice drone pilot or have many years of aviation experience, rules
                            and safety tips exist to help you fly safely in the National Airspace System. Think of these
                            tips as a pre-flight checklist to help you fly safely.</p>
                        <ul class="list-style2 solution-li">
                            <li>Check the local requirements for knowledge or training</li>
                            <li>Have your drone <a href="rpsa.kcaa.or.ke">registered</a></li>
                            <li>Obtain authorization depending on the <a href="#">category</a> of your operations</li>
                            <li>Be aware of Airspace <a href="#">Restrictions</a> </li>
                            <li>Keep your drone within your line of sight</li>
                            <li>Never fly near airports except with express <a href="rpas.kcaa.or.ke">approval</a> from
                                Civil Aviation Authority </li>
                            <li>Respect privacy</li>
                            <li>Fly your drone at or below 400 feet</li>
                            <li>Never fly over groups of people, public events without approval from the conveners of the
                                event</li>
                            <li>Never fly near public roads</li>
                            <li>Never fly near parks except with approval from the park management</li>
                            <li>Never fly under the influence of drugs or alcohol</li>
                        </ul>

                    </div>
                </div>
                <!--  end event left-->

                <!--  start event right-->
                <div class="col-lg-4 col-md-12">
                    <div class="side-bar">
                        <div class="widget pt-0 pb-4">
                            {{-- <form method='post'>
                                <input type="hidden" name="form-name" value="form 1" />
                                <input type="search" name="search" placeholder="Type here ...">
                                <button type="submit" class="butn theme"><i class="fa fa-search"
                                        aria-hidden="true"></i></button>
                            </form> --}}
                            <a class="butn fill margin-30px-top md-margin-25px-top sm-margin-20px-top " href="#">View
                                available courses
                                <i class="fas fa-long-arrow-alt-right margin-10px-left"></i></a>
                        </div>
                        {{-- <div class="widget">
                            <div class="widget-title">
                                <h6>Courses List</h6>
                            </div>
                            <ul class="no-margin-bottom default-style">
                                <li><a href="#">Mathematics.</a>
                                    <p class="no-margin-bottom">
                                        <i class="fas fa-clock text-hightlight-color padding-10px-right"></i>All Year
                                    </p>
                                </li>
                                <li><a href="#">Physics</a>
                                    <p class="no-margin-bottom">
                                        <i class="fas fa-clock text-hightlight-color padding-10px-right"></i>1st-2nd-3rd-4th
                                        Year
                                    </p>
                                </li>
                                <li><a href="#">Drawing</a>
                                    <p class="no-margin-bottom">
                                        <i class="fas fa-clock text-hightlight-color padding-10px-right"></i>1st-2nd Year
                                    </p>
                                </li>
                            </ul>
                        </div> --}}
                        <div class="widget">
                            <div class="widget-title">
                                <h6>Other Solutions</h6>
                            </div>
                            <div class="single-post margin-25px-bottom">
                                <div class="recent_img">
                                    <a href="/solutions/aviationSafety" title=""><img
                                            src="{{ asset('img/events/events-01.jpg') }}" alt="" /></a>
                                </div>
                                <div class="post_title">
                                    <a href="/solutions/aviationSafety">Aviation Safety</a>
                                    <p class="margin-5px-top font-size13 no-margin-bottom">
                                        <i class="fas fa-calendar-alt text-hightlight-color padding-10px-right"></i>5 Years
                                    </p>
                                </div>
                            </div>
                            <div class="single-post margin-25px-bottom">
                                <div class="recent_img">
                                    <a href="/solutions/aviationBusiness"><img
                                            src="{{ asset('img/events/events-02.jpg') }}" alt="" /></a>
                                </div>
                                <div class="post_title">
                                    <a href="/solutions/aviationBusiness">Aviation Business</a>
                                    <p class="margin-5px-top font-size13 no-margin-bottom">
                                        <i class="fas fa-calendar-alt text-hightlight-color padding-10px-right"></i>7 Years
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  end event right-->
            </div>
        </div>
    </section>
    <!-- end event-details section -->

@endsection

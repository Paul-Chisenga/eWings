@extends('layouts.index')

@section('content')
<x-pagetitle name="Enginnering" imgUrl="img/ewings-05.png" />
<!-- start event-details section -->
<section>
    <div class="container">
        <div class="row">
            <!--  start event left-->
            <div class="col-lg-9 col-md-12 sm-margin-40px-bottom">
                <div class="padding-30px-right md-padding-30px-right sm-no-padding-right">

                    <div class="margin-30px-bottom sm-margin-30px-bottom">
                        <div class="event-img">
                            <img src="{{asset('img/events/eventdetail-1.jpg')}}" alt="Event">
                        </div>
                    </div>
                    <h4 class="margin-15px-bottom font-weight-500">Programs Details</h4>
                    <p>Inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciuntincidunt ut labore et dolore magnam aliquam quaerat voluptatem.
                    </p>
                    <ul class="list-style2">
                        <li>Excepteur sint occaecat cupidatat non proident.</li>
                        <li>Duis aute irure dolor in reprehenderit in voluptate cillum.</li>
                        <li>Perspiciatis unde omnis iste natus error sit voluptatem accusantium.</li>
                    </ul>
                    <p class="no-margin-bottom margin-25px-top">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
            <!--  end event left-->

            <!--  start event right-->
            <div class="col-lg-3 col-md-12">
                <div class="side-bar">
                    <div class="widget search">
                        <form method='post'>
                            <input type="hidden" name="form-name" value="form 1" />
                            <input type="search" name="search" placeholder="Type here ...">
                            <button type="submit" class="butn theme"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </form>
                    </div>
                    <div class="widget">
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
                                    <i class="fas fa-clock text-hightlight-color padding-10px-right"></i>1st-2nd-3rd-4th Year
                                </p>
                            </li>
                            <li><a href="#">Drawing</a>
                                <p class="no-margin-bottom">
                                    <i class="fas fa-clock text-hightlight-color padding-10px-right"></i>1st-2nd Year
                                </p>
                            </li>
                        </ul>
                    </div>
                    <div class="widget">
                        <div class="widget-title">
                            <h6>Other Department</h6>
                        </div>
                        <div class="single-post margin-25px-bottom">
                            <div class="recent_img">
                                <a href="/department/engineering" title=""><img src="{{asset('img/events/events-01.jpg')}}" alt="" /></a>
                            </div>
                            <div class="post_title">
                                <a href="/department/engineering">Enginnering</a>
                                <p class="margin-5px-top font-size13 no-margin-bottom">
                                    <i class="fas fa-calendar-alt text-hightlight-color padding-10px-right"></i>5 Years
                                </p>
                            </div>
                        </div>
                        <div class="single-post margin-25px-bottom">
                            <div class="recent_img">
                                <a href="/department/medical"><img src="{{asset('img/events/events-02.jpg')}}" alt="" /></a>
                            </div>
                            <div class="post_title">
                                <a href="/department/medical">Medical</a>
                                <p class="margin-5px-top font-size13 no-margin-bottom">
                                    <i class="fas fa-calendar-alt text-hightlight-color padding-10px-right"></i>7 Years
                                </p>
                            </div>
                        </div>
                        <div class="single-post margin-25px-bottom">
                            <div class="recent_img">
                                <a href="/department/law"><img src="{{asset('img/events/events-03.jpg')}}" alt="" /></a>
                            </div>
                            <div class="post_title">
                                <a href="/department/law">Law</a>
                                <p class="margin-5px-top font-size13 no-margin-bottom">
                                    <i class="fas fa-calendar-alt text-hightlight-color padding-10px-right"></i>5 Years
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

@extends('layouts.index')

@section('content')
    <x-navbar isDark />
    <x-pagetitle name="Training" imgUrl="img/placeholders/ewings-08.jpg" />
    <!-- start course area section -->
    <section class="courses-area bg-light-gray">
        <div class="container">
            <div class="row">
                <div
                    class="col-12 center-col margin-50px-bottom md-margin-40px-bottom xs-margin-30px-bottom text-center text-theme-color">
                    <h3 class="font-weight-500 font-size32 md-font-size28 sm-font-size26 xs-font-size24 section-title">
                        Our Courses</h3>
                    <div class="title-border"><span class="lg"></span><span class="sm"></span></div>
                </div>
            </div>
            <div class="courses-list">
                <div class="row">
                    <div class="col-lg-4 col-md-6 margin-30px-bottom sm-margin-25px-bottom">
                        <div class="courses-box no-margin-lr">
                            <div class="courses-pic position-relative">
                                <a href="course-details.html"><img
                                        src="{{ asset('img/placeholders/ewings-courses-01.jpg') }}" alt="" /></a>
                            </div>
                            <div class="course-main-content">
                                <div class="courses-desc last-paragraph-no-margin">
                                    <div class="courses-title">
                                        <h4 class="font-size22 sm-font-size20 margin-5px-bottom font-weight-500"><a
                                                href="course-details.html" class="text-theme-color">Computer Science</a>
                                        </h4>
                                    </div>
                                    <div
                                        class="course-review margin-15px-bottom md-margin-10px-bottom mobile-margin-5px-bottom">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <span class="padding-10px-left">20 Reviews</span>
                                    </div>
                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                        laborum. </p>
                                </div>
                            </div>
                            <div class="card-footer media bg-white align-items-center justify-content-between">
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-1">
                                        <i class="ti-headphone mr-2"></i>25 lectures
                                    </li>
                                    <li class="">
                                        <i class="ti-time mr-2"></i>9 hours
                                    </li>
                                </ul>
                                <h4 class="text-right no-margin-bottom">
                                    <span>$180</span>
                                </h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 margin-30px-bottom sm-margin-25px-bottom">
                        <div class="courses-box no-margin-lr">
                            <div class="courses-pic position-relative">
                                <a href="course-details.html"><img
                                        src="{{ asset('img/placeholders/ewings-courses-02.jpg') }}" alt="" /></a>
                            </div>
                            <div class="course-main-content">
                                <div class="courses-desc last-paragraph-no-margin">
                                    <div class="courses-title">
                                        <h4 class="font-size22 sm-font-size20 margin-5px-bottom font-weight-500"><a
                                                href="course-details.html" class="text-theme-color">Marketing Business</a>
                                        </h4>
                                    </div>
                                    <div
                                        class="course-review margin-15px-bottom md-margin-10px-bottom mobile-margin-5px-bottom">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <span class="padding-10px-left">26 Reviews</span>
                                    </div>
                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                        laborum. </p>
                                </div>
                            </div>
                            <div class="card-footer media bg-white align-items-center justify-content-between">
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-1">
                                        <i class="ti-headphone mr-2"></i>65 lectures
                                    </li>
                                    <li class="">
                                        <i class="ti-time mr-2"></i>8 hours
                                    </li>
                                </ul>
                                <h4 class="text-right no-margin-bottom">
                                    <span>$140</span>
                                </h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 margin-30px-bottom sm-margin-25px-bottom">
                        <div class="courses-box no-margin-lr">
                            <div class="courses-pic position-relative">
                                <a href="course-details.html"><img
                                        src="{{ asset('img/placeholders/ewings-courses-03.jpg') }}" alt="" /></a>
                            </div>
                            <div class="course-main-content">
                                <div class="courses-desc last-paragraph-no-margin">
                                    <div class="courses-title">
                                        <h4 class="font-size22 sm-font-size20 margin-5px-bottom font-weight-500"><a
                                                href="course-details.html" class="text-theme-color">Architecture Design</a>
                                        </h4>
                                    </div>
                                    <div
                                        class="course-review margin-15px-bottom md-margin-10px-bottom mobile-margin-5px-bottom">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <span class="padding-10px-left">18 Reviews</span>
                                    </div>
                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                        laborum. </p>
                                </div>
                            </div>
                            <div class="card-footer media bg-white align-items-center justify-content-between">
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-1">
                                        <i class="ti-headphone mr-2"></i>55 lectures
                                    </li>
                                    <li class="">
                                        <i class="ti-time mr-2"></i>7 hours
                                    </li>
                                </ul>
                                <h4 class="text-right no-margin-bottom">
                                    <span>$190</span>
                                </h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 sm-margin-25px-bottom">
                        <div class="courses-box no-margin-lr">
                            <div class="courses-pic position-relative">
                                <a href="course-details.html"><img
                                        src="{{ asset('img/placeholders/ewings-courses-04.jpg') }}" alt="" /></a>
                            </div>
                            <div class="course-main-content">
                                <div class="courses-desc last-paragraph-no-margin">
                                    <div class="courses-title">
                                        <h4 class="font-size22 sm-font-size20 margin-5px-bottom font-weight-500"><a
                                                href="course-details.html" class="text-theme-color">Medical Technology</a>
                                        </h4>
                                    </div>
                                    <div
                                        class="course-review margin-15px-bottom md-margin-10px-bottom mobile-margin-5px-bottom">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <span class="padding-10px-left">25 Reviews</span>
                                    </div>
                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                        laborum. </p>
                                </div>
                            </div>
                            <div class="card-footer media bg-white align-items-center justify-content-between">
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-1">
                                        <i class="ti-headphone mr-2"></i>85 lectures
                                    </li>
                                    <li class="">
                                        <i class="ti-time mr-2"></i>6 hours
                                    </li>
                                </ul>
                                <h4 class="text-right no-margin-bottom">
                                    <span>$110</span>
                                </h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 xs-margin-25px-bottom">
                        <div class="courses-box no-margin-lr">
                            <div class="courses-pic position-relative">
                                <a href="course-details.html"><img
                                        src="{{ asset('img/placeholders/ewings-courses-05.jpg') }}" alt="" /></a>
                            </div>
                            <div class="course-main-content">
                                <div class="courses-desc last-paragraph-no-margin">
                                    <div class="courses-title">
                                        <h4 class="font-size22 sm-font-size20 margin-5px-bottom font-weight-500"><a
                                                href="course-details.html" class="text-theme-color">Microsoft Azure</a></h4>
                                    </div>
                                    <div
                                        class="course-review margin-15px-bottom md-margin-10px-bottom mobile-margin-5px-bottom">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <span class="padding-10px-left">22 Reviews</span>
                                    </div>
                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                        laborum. </p>
                                </div>
                            </div>
                            <div class="card-footer media bg-white align-items-center justify-content-between">
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-1">
                                        <i class="ti-headphone mr-2"></i>30 lectures
                                    </li>
                                    <li class="">
                                        <i class="ti-time mr-2"></i>5 hours
                                    </li>
                                </ul>
                                <h4 class="text-right no-margin-bottom">
                                    <span>$130</span>
                                </h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="courses-box no-margin-lr">
                            <div class="courses-pic position-relative">
                                <a href="course-details.html"><img
                                        src="{{ asset('img/placeholders/ewings-courses-06.jpg') }}" alt="" /></a>
                            </div>
                            <div class="course-main-content">
                                <div class="courses-desc last-paragraph-no-margin">
                                    <div class="courses-title">
                                        <h4 class="font-size22 sm-font-size20 margin-5px-bottom font-weight-500"><a
                                                href="course-details.html" class="text-theme-color">Android Apps</a></h4>
                                    </div>
                                    <div
                                        class="course-review margin-15px-bottom md-margin-10px-bottom mobile-margin-5px-bottom">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <span class="padding-10px-left">12 Reviews</span>
                                    </div>
                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                        laborum. </p>
                                </div>
                            </div>
                            <div class="card-footer media bg-white align-items-center justify-content-between">
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-1">
                                        <i class="ti-headphone mr-2"></i>75 lectures
                                    </li>
                                    <li class="">
                                        <i class="ti-time mr-2"></i>4 hours
                                    </li>
                                </ul>
                                <h4 class="text-right no-margin-bottom">
                                    <span>$160</span>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center margin-50px-top md-margin-35px-top sm-margin-30px-top">
                    <a class="butn" href="javascript:void(0)">View All <i
                            class="fas fa-long-arrow-alt-right margin-10px-left"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- end course area section -->
@endsection

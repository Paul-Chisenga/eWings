@extends('layouts.index')

@section('content')
    <x-navbar title="Consulting" />
    <section>
        <div class="container">
            <div class="row">
                <!--  start event left-->
                <div class="col-lg-6 col-md-12 sm-margin-40px-bottom">
                    <div class="padding-30px-right md-padding-30px-right sm-no-padding-right">
                        <p>Ewings boosts of world renown professionals with years of experience in operational environment
                            for clients ranging from Governments, NGOs, and the Private sector. We bring you tools and
                            business intelligence solutions designed to support a safe, secure, efficient and economical air
                            transport industry that is environmentally sustainable.
                        </p>
                        <p>We provide practical services to the aviation​ industry in the areas of Air Navigation Service,
                            Safety, Quality and Flight Operations.</p>
                        <p>Our Aviation solutions include;
                        <ul class="list-style2">
                            <li>Aviation Safety audits for Airlines and Ground Handlers</li>
                            <li>Aviation Enterprise Risk Management</li>
                            <li>Aviation Quality Management</li>
                        </ul>
                        </p>
                    </div>
                </div>
                <!--  end event left-->

                <!--  start event right-->
                <div class="col-lg-6 col-md-12">
                    <div class="side-bar">

                        <div class="margin-30px-bottom sm-margin-30px-bottom">
                            <div class="event-img">
                                <img src="{{ asset('img/events/eventdetail-1.jpg') }}" alt="Event">
                            </div>
                        </div>

                        {{-- <div class="widget pt-0 pb-4">
                            <a class="butn fill margin-30px-top md-margin-25px-top sm-margin-20px-top " href="#">View
                                available courses
                                <i class="fas fa-long-arrow-alt-right margin-10px-left"></i></a>
                        </div> --}}

                    </div>
                </div>
                <!--  end event right-->
            </div>
    </section>
@endsection

@extends('layouts.index')

@section('content')
    <x-navbar title="UAS Programs" />
    {{-- <x-pagetitle name="Unmanned Aircraft Systems" imgUrl="img/ewings-05.png" /> --}}
    <!-- start event-details section -->
    <section>
        <div class="container">
            <div class="row">
                <!--  start event left-->
                <div class="col-lg-6 col-md-12 sm-margin-40px-bottom">
                    <div class="padding-30px-right md-padding-30px-right sm-no-padding-right">
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
                        <ul class="list-style2">
                            <li>Check the local requirements for knowledge or training</li>
                            <li>Have your drone <a class="custom-link" href="rpsa.kcaa.or.ke">registered</a></li>
                            <li>Obtain authorization depending on the <a class="custom-link" href="#">category</a> of your operations</li>
                            <li>Be aware of Airspace <a class="custom-link" href="#">Restrictions</a> </li>
                            <li>Keep your drone within your line of sight</li>
                            <li>Never fly near airports except with express <a class="custom-link" href="rpas.kcaa.or.ke">approval</a> from
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
                <div class="col-lg-6 col-md-12">
                    <div class="side-bar">

                        <div class="margin-30px-bottom sm-margin-30px-bottom">
                            <div class="event-img">
                                <img src="{{ asset('img/placeholders/ewings-uas.jpg') }}" alt="Event">
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
            <div class="row py-5">
                <div class="col-lg-7 pr-lg-5">
                    <h4 class="margin-15px-bottom font-weight-500">Training Programs</h4>
                    <p>We deliver Unmanned Aircraft Systems (UAS) training programs for individuals and corporate clients to
                        meet various needs. Whether you are a novice, flying for leisure or desire to horn your skills for a
                        cutting edge drone service, we offer you a complete solution to UAS to meet your expertise
                        requirements. </p>
                    <h6 class="margin-15px-bottom font-weight-500">Basic UAS training </h6>
                    <p>Our Contactless UAS training for RPL platform and framework is almost 100% virtual. We are available
                        for in-person meetings and training, but most of our work together can be performed using our
                        virtual training platform.
                    </p>
                    <p>For our UAS Practical training, we instruct hands-on with students using all flight modes. Students
                        may bring their own but “REGISTERED” flight system, and training is currently offered at our
                        training sites. Contact our office to book a practical <a href="#" class="custom-link">session</a></p>
                    <p>What’s covered under a basic UAS Course
                    <ul class="list-style2">
                        <li>An overview of drones: an introduction to drones which teaches students how drones function and
                            fly with and without GPS, and how they're currently being used for commercial and public safety
                            applications;
                        </li>
                        <li>UAS Regulations 2018: to help students learn safety and operational requirements for award of
                            KCAA remote pilot license.</li>
                        <li>Hands-on drone flight training on an industry-grade drone;</li>
                        <li>Professional training programs</li>
                        <li>Drone photo and video production, which will allow students to use their flight skills to
                            capture aerial imagery (both photos and video) and learn how to work with the results in popular
                            digital editing software to create video productions;
                        </li>
                        <li>Introduction to Pix4D, an advanced photogrammetry application that turns data into visual
                            representations, including orthomosaic mapping, 3D modeling, point clouds, Normalized Difference
                            Vegetation Index (NDVI) and geographic information systems.</li>
                    </ul>
                    </p>
                </div>
                <div class="col-lg-5">
                    <h4 class="margin-15px-bottom font-weight-500">Corporate UAS Services</h4>
                    <p>Ewings is a nationally recognized aviation training and consulting company. We are a certified RPAS
                        Operating Company (ROC)by KCAA and offer the most advanced, end-to-end drone solutions to commercial
                        businesses. While working with government agencies, ewings is committed to walking with you on your
                        journey towards full compliance with government requirements and providing modern day solutions to
                        todays’ problems. Safety, security and respect for privacy are top priorities in all of our
                        engagements.</p>
                    <ul class="list-style2 solution-li">
                        <li>Aerial Mapping and Survey</li>
                        <li>Solutions for precision agriculture
                            <ul class="list-style2 solution-li">
                                <li>Crop spraying</li>
                                <li>Soil analysis</li>
                                <li>Crop scouting</li>
                            </ul>
                        </li>
                        <li>Security surveillance</li>
                        <li>Cinematography</li>
                        <li>Aerial inspection for real estates and installations</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- end event-details section -->

@endsection

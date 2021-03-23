<!-- start header section -->
@if (isset($isDark))
    <header class="header-style1 menu_area-light">
    @else
        <header>
@endif
<div class="navbar-default">

    <!-- start top search -->
    <div class="top-search bg-highlight-theme">
        <div class="container">
            <form class="search-form" action="search.html" method="GET" accept-charset="utf-8">
                <div class="input-group">
                    <span class="input-group-addon cursor-pointer">
                        <button class="search-form_submit fas fa-search font-size18 text-white" type="submit"></button>
                    </span>
                    <input type="text" class="search-form_input form-control" name="s" autocomplete="off"
                        placeholder="Type & hit enter...">
                    <span class="input-group-addon close-search"><i
                            class="fas fa-times font-size18 line-height-28 margin-5px-top"></i></span>
                </div>
            </form>
        </div>
    </div>
    <!-- end top search -->

    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-12">
                <div class="menu_area alt-font">
                    <nav class="navbar navbar-expand-lg navbar-light no-padding">

                        @if (isset($isDark))
                            <div class="navbar-header navbar-header-custom text-light">
                                <!-- start logo -->
                                <a href="/" class="navbar-brand"><img id="logo" src="{{ asset('img/logo.png') }}"
                                        alt="logo"></a>
                                Eagle Wings Aviation
                                <!-- end logo -->
                            </div>
                        @else
                            <div class="navbar-header navbar-header-custom text-light p-0">
                                <!-- start logo -->
                                <a href="/" class="navbar-brand">
                                    @if (!isset($isDark) && isset($title))
                                        {{ $title }}
                                    @endif
                                </a>
                                <!-- end logo -->
                            </div>
                        @endif


                        <div class="navbar-toggler"></div>

                        <!-- start menu area -->
                        <ul class="navbar-nav ml-auto" id="nav" style="display: none;">
                            <li><a href="/">Home</a></li>
                            <li><a href="/about">About Us</a></li>
                            <li><a href="#">Solutions</a>
                                <ul>
                                    <li><a href="/solutions/unmannedAircraftSystems">Unmanned Aircraft Systems</a></li>
                                    <li><a href="/solutions/consulting">Consulting</a></li>
                                    <li><a href="/solutions/training">Training</a></li>
                                </ul>
                            </li>
                            <li><a href="/contact">Contact Us</a></li>
                        </ul>
                        <!-- end menu area -->

                        <!-- start atribute navigation -->
                        <div class="attr-nav sm-no-margin sm-margin-65px-right xs-margin-60px-right">
                            <ul>
                                {{-- <li class="search"><a href="#"><i class="fas fa-search"></i></a></li> --}}
                            </ul>
                        </div>
                        <!-- end atribute navigation -->
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

</header>
<!-- end header section -->

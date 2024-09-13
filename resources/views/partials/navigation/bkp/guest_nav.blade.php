<!-- 34. resources/views/partials/navigation/guest_nav.blade.php -->
   
  <!--header-->
  <header class="main-header clearfix" role="header">
  <div class="logo">
    <a href="{{ route('home') }}">
        <img src="{{ asset('logo/onespoteducation-high-resolution-logo.png') }}" alt="Logo">
    </a>
  </div>
    <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
    @php
        // Check if the current URL is the homepage
        $isHomePage = Request::is('/');
    @endphp

    @if ($isHomePage)
        <nav id="menu" class="main-nav" role="navigation">
            <ul class="main-menu">
                <li><a href="#section1">Home</a></li>
                <li class="has-submenu">
                    <a href="#section2">About Us</a>
                    <ul class="sub-menu">
                        <!-- <li><a href="#section2">Who we are?</a></li> -->
                        <li><a href="#section3">What we do?</a></li>
                        <li><a href="#section3">How it works?</a></li>
                        <li><a href="{{ route('login') }}">Explore</a></li>
                    </ul>
                </li>
                <li><a href="#section4">Courses</a></li>
                <!-- <li><a href="#section5">Video</a></li> -->
                <li><a href="#section6">Contact</a></li>
                <li><a href="{{ route('announcements.index') }}">NOTICE/ANNOUNCEMENTS</a></li>
            </ul>
        </nav>
    @else
        <nav id="menu" class="main-nav" role="navigation">
            <ul class="main-menu">
                <li><a href="{{ route('home') }}#section1">Home</a></li>
                <li class="has-submenu">
                    <a href="{{ route('home') }}#section2">About Us</a>
                    <ul class="sub-menu">
                        <li><a href="{{ route('home') }}#section2">What we do?</a></li>
                        <!-- <li><a href="{{ route('home') }}#section2">Who we are?</a></li> -->
                        <li><a href="{{ route('home') }}#tabs-2">How it works?</a></li>
                        <li><a href="{{ route('login') }}">Explore</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('home') }}#section4">Courses</a></li>
                <!-- <li><a href="#section5">Video</a></li> -->
                <li><a href="{{ route('home') }}#section6">Contact</a></li>
                <li><a href="{{ route('announcements.index') }}">NOTICE/ANNOUNCEMENTS</a></li>
            </ul>
        </nav>    
    @endif

  </header>

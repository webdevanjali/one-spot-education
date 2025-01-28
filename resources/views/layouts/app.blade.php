<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <title>@yield('title', 'Home Page')</title>
    
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('home/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('home/assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/css/templatemo-grad-school.css') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/css/owl.css') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/css/lightbox.css') }}">

    <!-- user side menu assets -->
    <link href="{{ asset('user-sidemenu/styles.css') }}" rel='stylesheet'>
    <script src="{{ asset('user-sidemenu/script.js') }}"></script>
    <script>
        // Function to remove the 'mt-4' class from all '.container' divs
        function removeMt4Class() {
            // Select all div elements with the 'container' class
            var containers = document.querySelectorAll('div.container');
            
            // Iterate over the selected elements
            containers.forEach(function(container) {
                // Remove the 'mt-4' class if it exists
                container.classList.remove('mt-4');
            });
        }

        // Call the function when the DOM content is fully loaded
        document.addEventListener('DOMContentLoaded', removeMt4Class);
    </script>
    <style>
    /* Example CSS for modal visibility */
    .modal {
        display: none;
        opacity: 0;
        transition: opacity 0.3s ease;
    }
    .modal.show {
        display: block;
        opacity: 1;
    }
    /* Ensure to include this CSS in your stylesheets or inline within <style> tags */

    .logo img {
        height: 70px; /* Adjust the height as needed */
        width: auto; /* Maintain aspect ratio */
        display: block; /* Remove extra space below the image */
    }
    #section-content{
        min-height:92vh;
        /* background-color: var(--color-tertiary); */
        align-content:center;
    }
    header + *, header .main-banner {
        margin-top: 78px;      
        /* padding: 300px;  top:300px;      */
        /* border:10px solid red; */
    }
    .home-content + *{
        padding-top: 3rem !important;
    }

  </style>    
    <!-- Stack for additional CSS if needed -->
    @stack('head-css')
</head>

<body>
    <!-- Header -->

    @include('partials.navigation.guest_nav')

    <!-- Main Content Sections -->

    @if (Auth::check())
        <div >
            @php
                // Get the user's role name, default to 'guest' if no role is found
                $roleName = Auth::user()->roles->pluck('role_name')->first() ?? 'guest';

                // Check if the current URL is the homepage
                 $isHomePage = Request::is('/');

            @endphp

                <!-- Include the role-specific navigation file -->
                @include('partials.navigation.' . $roleName . '_nav')
                <section class="home-section" >
                    <div class="home-content">
                    <i class='bx bx-menu'></i>
                    <span class="text">{{ ucfirst(Auth::user()->roles->pluck('role_name')->first()) }} : {{ Auth::user()->name }}</span>
                    </div>
                    @yield('content')
                    @yield('user-dashboard-content')
                </section>
        </div>
    
    @endif
    
    @yield('main-banner')
    <div class="hassection">
    @if(View::hasSection('content') && Auth::check() === false)
        <div id="section-content">
            @yield('content')
        </div>
    @endif
    </div>

    @yield('about')
    @yield('courses')
    @yield('all-courses')
    @yield('contact')
 

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p><i class="fa fa-copyright"></i> Copyright {{ date('Y') }} OneSpot Education. | All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <!-- jQuery -->
    <script src="{{ asset('home/vendor/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap JavaScript -->
    <script src="{{ asset('home/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Additional JavaScript Files -->
    <script src="{{ asset('home/assets/js/isotope.min.js') }}"></script>
    <script src="{{ asset('home/assets/js/owl-carousel.js') }}"></script>
    <script src="{{ asset('home/assets/js/lightbox.js') }}"></script>
    <script src="{{ asset('home/assets/js/tabs.js') }}"></script>
    <script src="{{ asset('home/assets/js/video.js') }}"></script>
    <script src="{{ asset('home/assets/js/slick-slider.js') }}"></script>
    <script src="{{ asset('home/assets/js/custom.js') }}"></script>

    <!-- Custom JavaScript for specific functionalities -->
    <script>
        $(document).ready(function() {
            // Example custom script to add an active class
            $('.nav li:first').addClass('active');

            var showSection = function(section, isAnimate) {
                var direction = section.replace(/#/, ''),
                    reqSection = $('.section').filter('[data-section="' + direction + '"]'),
                    reqSectionPos = reqSection.offset() ? reqSection.offset().top : 0;

                if (isAnimate) {
                    $('body, html').animate({
                        scrollTop: reqSectionPos
                    }, 800);
                } else {
                    $('body, html').scrollTop(reqSectionPos);
                }
            };

            var checkSection = function() {
                $('.section').each(function() {
                    var $this = $(this),
                        topEdge = $this.offset().top - 80,
                        bottomEdge = topEdge + $this.height(),
                        wScroll = $(window).scrollTop();
                    if (topEdge < wScroll && bottomEdge > wScroll) {
                        var currentId = $this.data('section'),
                            reqLink = $('a').filter('[href*=\\#' + currentId + ']');
                        reqLink.closest('li').addClass('active').siblings().removeClass('active');
                    }
                });
            };

            $('.main-menu, .scroll-to-section').on('click', 'a', function(e) {
                var href = $(this).attr('href');

                // Check if the href is a full-page route or an in-page section
                if (href.startsWith('#')) {
                    e.preventDefault();
                    $('#menu').removeClass('active');
                    showSection(href, true);
                }
            });

            $(window).scroll(function() {
                checkSection();
            });
        });
    </script>

    <!-- Success message modal -->
    @yield('success')

    <!-- Stack for additional JavaScript if needed -->
    @stack('scripts')
</body>
</html>

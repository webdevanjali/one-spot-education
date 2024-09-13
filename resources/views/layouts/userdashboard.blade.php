<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Home Page')</title>
    <link rel="stylesheet" href="{{ asset('css/home_template.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard_template.css') }}">
    @stack('head-scripts') <!-- For additional CSS/JS specific to certain views -->

    <link href="{{ asset('user-sidemenu/styles.css') }}" rel='stylesheet'>
    <script src="{{ asset('user-sidemenu/script.js') }}"></script>

</head>
<body>
    
    @include('partials.navigation.' . Auth::user()->roles->pluck('role_name')->first() . '_nav') <!-- Role-specific navigation -->
    
    <main>
        @yield('content') <!-- Main content for the specific page -->
    </main>

    @include('partials.footer')
</body>
</html>

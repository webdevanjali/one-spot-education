<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Home Page')</title>
    <link rel="stylesheet" href="{{ asset('css/home_template.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard_template.css') }}">
    @stack('head-scripts') <!-- For additional CSS/JS specific to certain views -->
</head>
<body>

    @section('content')
        @include('partials.navigation.' . Auth::user()->role . '_nav') <!-- Role-specific navigation -->
        
        <h1>Welcome to Your Dashboard</h1>
        @yield('user-dashboard-content') <!-- Content specific to the user dashboard -->
    @endsection

    <main>
        @yield('content') <!-- Content for the specific page -->
    </main>

    @include('partials.footer')
</body>
</html>

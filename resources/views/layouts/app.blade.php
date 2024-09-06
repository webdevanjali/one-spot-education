<!-- resources/views/layouts.app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'OneSpot Education')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    @include('partials.navigation.guest_nav')
    <div class="container">
        @yield('content')
    </div>
    @include('partials.footer')
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
<!-- 34. resources/views/partials/navigation/guest_nav.blade.php -->

<nav>
    <ul>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('courses.index') }}">Courses</a></li>
        <li><a href="{{ route('live-classes.index') }}">Live Classes</a></li>
        <li><a href="{{ route('home') }}#about-section">About</a></li>
        <li><a href="{{ route('home') }}#contact">Contact</a></li>
    </ul>
</nav>

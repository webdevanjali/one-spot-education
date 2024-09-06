<!-- 33. resources/views/partials/navigation/student_nav.blade.php -->

<nav>
    <ul>
        <li><a href="{{ route('student.dashboard') }}">Dashboard</a></li>
        <li><a href="{{ route('courses.index') }}">Courses</a></li>
        <li><a href="{{ route('live-classes.index') }}">Live Classes</a></li>
        <li><a href="{{ route('assignments.index') }}">Assignments</a></li>
        <li><a href="{{ route('attendance.index') }}">Attendance</a></li>
        <li><a href="{{ route('performance.index') }}">Performance</a></li>
        <li><a href="{{ route('notifications.index') }}">Notifications</a></li>
        <li><a href="{{ route('profile.index') }}">Profile</a></li>
    </ul>
</nav>

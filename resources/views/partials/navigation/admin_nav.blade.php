<!-- 31. resources/views/partials/navigation/admin_nav.blade.php -->

<nav>
    <ul>
        <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
        <li><a href="{{ route('reports.index') }}">Reports</a></li>
        <li><a href="{{ route('task-assignments.index') }}">Task Assignments</a></li>
        <li><a href="{{ route('resource-links.index') }}">Resource Links</a></li>
        <li><a href="{{ route('file-uploads.index') }}">File Uploads</a></li>
        <li><a href="{{ route('qualification-proofs.index') }}">Qualification Proofs</a></li>
        <li><a href="{{ route('schedules.index') }}">Schedules</a></li>
        <li><a href="{{ route('announcements.index') }}">Announcements</a></li>
    </ul>
</nav>

<!-- Dummy template of all View Blade Files -->

1. resources/views/layouts/app.blade.php

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

2. resources/views/admin/dashboard.blade.php

@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('content')
    <h1>Admin Dashboard</h1>
    <!-- Admin dashboard content here -->
@endsection

3. resources/views/admin/reports/index.blade.php

@extends('layouts.admin')

@section('title', 'Reports')

@section('content')
    <h1>Reports</h1>
    <a href="{{ route('reports.create') }}" class="btn btn-primary">Create Report</a>
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reports as $report)
                <tr>
                    <td>{{ $report->title }}</td>
                    <td>
                        <a href="{{ route('reports.show', $report->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('reports.edit', $report->id) }}" class="btn btn-warning">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

4. resources/views/admin/reports/create.blade.php

@extends('layouts.admin')

@section('title', 'Create Report')

@section('content')
    <h1>Create Report</h1>
    <form action="{{ route('reports.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" id="title" name="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea id="content" name="content" class="form-control" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Create Report</button>
    </form>
@endsection

5. resources/views/admin/reports/edit.blade.php

@extends('layouts.admin')

@section('title', 'Edit Report')

@section('content')
    <h1>Edit Report</h1>
    <form action="{{ route('reports.update', $report->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" id="title" name="title" class="form-control" value="{{ $report->title }}" required>
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea id="content" name="content" class="form-control" rows="5" required>{{ $report->content }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update Report</button>
    </form>
@endsection

6. resources/views/admin/reports/show.blade.php

@extends('layouts.admin')

@section('title', 'Show Report')

@section('content')
    <h1>{{ $report->title }}</h1>
    <p>{{ $report->content }}</p>
    <a href="{{ route('reports.index') }}" class="btn btn-secondary">Back to Reports</a>
@endsection

7. resources/views/admin/task-assignments/index.blade.php

@extends('layouts.admin')

@section('title', 'Task Assignments')

@section('content')
    <h1>Task Assignments</h1>
    <a href="{{ route('task-assignments.create') }}" class="btn btn-primary">Create Task Assignment</a>
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Due Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $task)
                <tr>
                    <td>{{ $task->title }}</td>
                    <td>{{ $task->description }}</td>
                    <td>{{ $task->due_date }}</td>
                    <td>
                        <a href="{{ route('task-assignments.show', $task->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('task-assignments.edit', $task->id) }}" class="btn btn-warning">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

8. resources/views/admin/task-assignments/create.blade.php

@extends('layouts.admin')

@section('title', 'Create Task Assignment')

@section('content')
    <h1>Create Task Assignment</h1>
    <form action="{{ route('task-assignments.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" id="title" name="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea id="description" name="description" class="form-control" rows="5" required></textarea>
        </div>
        <div class="form-group">
            <label for="due_date">Due Date</label>
            <input type="date" id="due_date" name="due_date" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Create Task Assignment</button>
    </form>
@endsection

9. resources/views/admin/task-assignments/edit.blade.php

@extends('layouts.admin')

@section('title', 'Edit Task Assignment')

@section('content')
    <h1>Edit Task Assignment</h1>
    <form action="{{ route('task-assignments.update', $task->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" id="title" name="title" class="form-control" value="{{ $task->title }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea id="description" name="description" class="form-control" rows="5" required>{{ $task->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="due_date">Due Date</label>
            <input type="date" id="due_date" name="due_date" class="form-control" value="{{ $task->due_date }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Task Assignment</button>
    </form>
@endsection

10. resources/views/admin/task-assignments/show.blade.php

@extends('layouts.admin')

@section('title', 'Show Task Assignment')

@section('content')
    <h1>{{ $task->title }}</h1>
    <p>{{ $task->description }}</p>
    <p>Due Date: {{ $task->due_date }}</p>
    <a href="{{ route('task-assignments.index') }}" class="btn btn-secondary">Back to Task Assignments</a>
@endsection

11. resources/views/admin/resource-links/index.blade.php

@extends('layouts.admin')

@section('title', 'Resource Links')

@section('content')
    <h1>Resource Links</h1>
    <a href="{{ route('resource-links.create') }}" class="btn btn-primary">Create Resource Link</a>
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>URL</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($links as $link)
                <tr>
                    <td>{{ $link->title }}</td>
                    <td>{{ $link->url }}</td>
                    <td>
                        <a href="{{ route('resource-links.show', $link->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('resource-links.edit', $link->id) }}" class="btn btn-warning">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

12. resources/views/admin/resource-links/create.blade.php

@extends('layouts.admin')

@section('title', 'Create Resource Link')

@section('content')
    <h1>Create Resource Link</h1>
    <form action="{{ route('resource-links.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" id="title" name="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="url">URL</label>
            <input type="url" id="url" name="url" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Create Resource Link</button>
    </form>
@endsection

13. resources/views/admin/resource-links/edit.blade.php

@extends('layouts.admin')

@section('title', 'Edit Resource Link')

@section('content')
    <h1>Edit Resource Link</h1>
    <form action="{{ route('resource-links.update', $link->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" id="title" name="title" class="form-control" value="{{ $link->title }}" required>
        </div>
        <div class="form-group">
            <label for="url">URL</label>
            <input type="url" id="url" name="url" class="form-control" value="{{ $link->url }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Resource Link</button>
    </form>
@endsection

14. resources/views/admin/resource-links/show.blade.php

@extends('layouts.admin')

@section('title', 'Show Resource Link')

@section('content')
    <h1>{{ $link->title }}</h1>
    <p><a href="{{ $link->url }}" target="_blank">{{ $link->url }}</a></p>
    <a href="{{ route('resource-links.index') }}" class="btn btn-secondary">Back to Resource Links</a>
@endsection

15. resources/views/admin/file-uploads/index.blade.php

@extends('layouts.admin')

@section('title', 'File Uploads')

@section('content')
    <h1>File Uploads</h1>
    <a href="{{ route('file-uploads.create') }}" class="btn btn-primary">Upload File</a>
    <table class="table">
        <thead>
            <tr>
                <th>Filename</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($files as $file)
                <tr>
                    <td>{{ $file->filename }}</td>
                    <td>
                        <a href="{{ route('file-uploads.show', $file->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('file-uploads.edit', $file->id) }}" class="btn btn-warning">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

16. resources/views/admin/file-uploads/create.blade.php

@extends('layouts.admin')

@section('title', 'Upload File')

@section('content')
    <h1>Upload File</h1>
    <form action="{{ route('file-uploads.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="file">Select File</label>
            <input type="file" id="file" name="file" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Upload File</button>
    </form>
@endsection

17. resources/views/admin/file-uploads/edit.blade.php

@extends('layouts.admin')

@section('title', 'Edit File Upload')

@section('content')
    <h1>Edit File Upload</h1>
    <form action="{{ route('file-uploads.update', $file->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="file">Select New File (optional)</label>
            <input type="file" id="file" name="file" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Update File</button>
    </form>
@endsection

18. resources/views/admin/file-uploads/show.blade.php

@extends('layouts.admin')

@section('title', 'Show File Upload')

@section('content')
    <h1>{{ $file->filename }}</h1>
    <p><a href="{{ asset('storage/' . $file->path) }}" target="_blank">Download File</a></p>
    <a href="{{ route('file-uploads.index') }}" class="btn btn-secondary">Back to File Uploads</a>
@endsection

19. resources/views/admin/qualification-proofs/index.blade.php

@extends('layouts.admin')

@section('title', 'Qualification Proofs')

@section('content')
    <h1>Qualification Proofs</h1>
    <a href="{{ route('qualification-proofs.create') }}" class="btn btn-primary">Upload Qualification Proof</a>
    <table class="table">
        <thead>
            <tr>
                <th>Filename</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($proofs as $proof)
                <tr>
                    <td>{{ $proof->filename }}</td>
                    <td>
                        <a href="{{ route('qualification-proofs.show', $proof->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('qualification-proofs.edit', $proof->id) }}" class="btn btn-warning">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

20. resources/views/admin/qualification-proofs/create.blade.php

@extends('layouts.admin')

@section('title', 'Upload Qualification Proof')

@section('content')
    <h1>Upload Qualification Proof</h1>
    <form action="{{ route('qualification-proofs.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="file">Select Proof</label>
            <input type="file" id="file" name="file" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Upload Proof</button>
    </form>
@endsection

21. resources/views/admin/qualification-proofs/edit.blade.php

@extends('layouts.admin')

@section('title', 'Edit Qualification Proof')

@section('content')
    <h1>Edit Qualification Proof</h1>
    <form action="{{ route('qualification-proofs.update', $proof->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="file">Select New Proof (optional)</label>
            <input type="file" id="file" name="file" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Update Proof</button>
    </form>
@endsection

22. resources/views/admin/qualification-proofs/show.blade.php

@extends('layouts.admin')

@section('title', 'Show Qualification Proof')

@section('content')
    <h1>{{ $proof->filename }}</h1>
    <p><a href="{{ asset('storage/' . $proof->path) }}" target="_blank">Download Proof</a></p>
    <a href="{{ route('qualification-proofs.index') }}" class="btn btn-secondary">Back to Qualification Proofs</a>
@endsection

23. resources/views/admin/schedules/index.blade.php

@extends('layouts.admin')

@section('title', 'Schedules')

@section('content')
    <h1>Schedules</h1>
    <a href="{{ route('schedules.create') }}" class="btn btn-primary">Create Schedule</a>
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($schedules as $schedule)
                <tr>
                    <td>{{ $schedule->title }}</td>
                    <td>{{ $schedule->date }}</td>
                    <td>
                        <a href="{{ route('schedules.show', $schedule->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('schedules.edit', $schedule->id) }}" class="btn btn-warning">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

24. resources/views/admin/schedules/create.blade.php

@extends('layouts.admin')

@section('title', 'Create Schedule')

@section('content')
    <h1>Create Schedule</h1>
    <form action="{{ route('schedules.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" id="title" name="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="date">Date</label>
            <input type="date" id="date" name="date" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Create Schedule</button>
    </form>
@endsection

25. resources/views/admin/schedules/edit.blade.php

@extends('layouts.admin')

@section('title', 'Edit Schedule')

@section('content')
    <h1>Edit Schedule</h1>
    <form action="{{ route('schedules.update', $schedule->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" id="title" name="title" class="form-control" value="{{ $schedule->title }}" required>
        </div>
        <div class="form-group">
            <label for="date">Date</label>
            <input type="date" id="date" name="date" class="form-control" value="{{ $schedule->date }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Schedule</button>
    </form>
@endsection

26. resources/views/admin/schedules/show.blade.php

@extends('layouts.admin')

@section('title', 'Show Schedule')

@section('content')
    <h1>{{ $schedule->title }}</h1>
    <p>Date: {{ $schedule->date }}</p>
    <a href="{{ route('schedules.index') }}" class="btn btn-secondary">Back to Schedules</a>
@endsection

27. resources/views/admin/announcements/index.blade.php

@extends('layouts.admin')

@section('title', 'Announcements')

@section('content')
    <h1>Announcements</h1>
    <a href="{{ route('announcements.create') }}" class="btn btn-primary">Create Announcement</a>
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($announcements as $announcement)
                <tr>
                    <td>{{ $announcement->title }}</td>
                    <td>
                        <a href="{{ route('announcements.show', $announcement->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('announcements.edit', $announcement->id) }}" class="btn btn-warning">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

28. resources/views/admin/announcements/create.blade.php

@extends('layouts.admin')

@section('title', 'Create Announcement')

@section('content')
    <h1>Create Announcement</h1>
    <form action="{{ route('announcements.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" id="title" name="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea id="content" name="content" class="form-control" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Create Announcement</button>
    </form>
@endsection

29. resources/views/admin/announcements/edit.blade.php

@extends('layouts.admin')

@section('title', 'Edit Announcement')

@section('content')
    <h1>Edit Announcement</h1>
    <form action="{{ route('announcements.update', $announcement->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" id="title" name="title" class="form-control" value="{{ $announcement->title }}" required>
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea id="content" name="content" class="form-control" rows="5" required>{{ $announcement->content }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update Announcement</button>
    </form>
@endsection

30. resources/views/admin/announcements/show.blade.php

@extends('layouts.admin')

@section('title', 'Show Announcement')

@section('content')
    <h1>{{ $announcement->title }}</h1>
    <p>{{ $announcement->content }}</p>
    <a href="{{ route('announcements.index') }}" class="btn btn-secondary">Back to Announcements</a>
@endsection

31. resources/views/partials/navigation/admin_nav.blade.php

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

32. resources/views/partials/navigation/teacher_nav.blade.php

<nav>
    <ul>
        <li><a href="{{ route('teacher.dashboard') }}">Dashboard</a></li>
        <li><a href="{{ route('courses.index') }}">Courses</a></li>
        <li><a href="{{ route('live-classes.index') }}">Live Classes</a></li>
        <li><a href="{{ route('assignments.index') }}">Assignments</a></li>
        <li><a href="{{ route('attendance.index') }}">Attendance</a></li>
        <li><a href="{{ route('performance.index') }}">Performance</a></li>
        <li><a href="{{ route('notifications.index') }}">Notifications</a></li>
        <li><a href="{{ route('profile.index') }}">Profile</a></li>
    </ul>
</nav>

33. resources/views/partials/navigation/student_nav.blade.php

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

34. resources/views/partials/navigation/guest_nav.blade.php

<nav>
    <ul>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('courses.index') }}">Courses</a></li>
        <li><a href="{{ route('live-classes.index') }}">Live Classes</a></li>
        <li><a href="{{ route('about') }}">About</a></li>
        <li><a href="{{ route('contact') }}">Contact</a></li>
    </ul>
</nav>

35. resources/views/partials/footer.blade.php

<footer>
    <p>&copy; {{ date('Y') }} OneSpot Education. All rights reserved.</p>
</footer>   

36. resources/views/partials/messages.blade.php

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

37. resources/views/modules/courses/index.blade.php

@extends('layouts.app')

@section('title', 'Courses')

@section('content')
    <h1>Courses</h1>
    <a href="{{ route('courses.create') }}" class="btn btn-primary">Create Course</a>
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($courses as $course)
                <tr>
                    <td>{{ $course->title }}</td>
                    <td>{{ $course->description }}</td>
                    <td>
                        <a href="{{ route('courses.show', $course->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-warning">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

38. resources/views/modules/courses/create.blade.php

@extends('layouts.app')

@section('title', 'Create Course')

@section('content')
    <h1>Create Course</h1>
    <form action="{{ route('courses.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" id="title" name="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea id="description" name="description" class="form-control" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Create Course</button>
    </form>
@endsection

39. resources/views/modules/courses/edit.blade.php

@extends('layouts.app')

@section('title', 'Edit Course')

@section('content')
    <h1>Edit Course</h1>
    <form action="{{ route('courses.update', $course->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" id="title" name="title" class="form-control" value="{{ $course->title }}" required>
        </div>


        <div class="form-group">
            <label for="description">Description</label>
            <textarea id="description" name="description" class="form-control" rows="5" required>{{ $course->description }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update Course</button>
    </form>
@endsection

40. resources/views/modules/courses/show.blade.php

@extends('layouts.app')

@section('title', 'Show Course')

@section('content')
    <h1>{{ $course->title }}</h1>
    <p>{{ $course->description }}</p>
    <a href="{{ route('courses.index') }}" class="btn btn-secondary">Back to Courses</a>
@endsection

41/. resources/views/modules/assignments/show.blade.php

@extends('layouts.app')

@section('title', 'Show Assignment')

@section('content')
    <h1>{{ $assignment->title }}</h1>
    <p><strong>Description:</strong> {{ $assignment->description }}</p>
    <p><strong>Due Date:</strong> {{ $assignment->due_date->format('F j, Y') }}</p>

    @if($assignment->attachments->isNotEmpty())
        <h2>Attachments</h2>
        <ul>
            @foreach($assignment->attachments as $attachment)
                <li><a href="{{ asset('storage/' . $attachment->file_path) }}" target="_blank">{{ $attachment->file_name }}</a></li>
            @endforeach
        </ul>
    @endif

    <a href="{{ route('assignments.index') }}" class="btn btn-secondary">Back to Assignments</a>
@endsection
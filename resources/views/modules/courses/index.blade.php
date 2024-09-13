@extends('layouts.app')

@section('title', 'All Courses | One Spot Education | Innovative learning for university students')

@section('content')
    @php
        $isAuthenticated = Auth::check();
        $userRole = $isAuthenticated ? Auth::user()->roles->pluck('role_name')->first() : null;
    @endphp

    <div class="container">
        <h1 class="mt-4">Courses</h1>
        @if ($isAuthenticated && $userRole === 'admin')
            <a href="{{ route('courses.create') }}" class="btn btn-primary mb-3">Create New Course</a>
        @endif
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        
        @if ($courses->isEmpty())
            <p>No courses available.</p>
        @else
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Course Name</th>
                        <th>Description</th>
                        <!-- <th>Teacher ID</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Schedule</th>
                        <th>Cover Image</th>
                        <th>Created At</th>
                        <th>Updated At</th> -->
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($courses as $course)
                        <tr>
                            <td>{{ $course->course_id }}</td>
                            <td>{{ $course->course_name }}</td>
                            <td><p>
    {{ \Str::limit($course->description, 94, '...') }}
    <a href="{{ route('courses.show', $course->course_id) }}" class="btn btn-link">Read More</a>
</p></td>
                            <!-- <td>{{ $course->teacher_id }}</td>
                            <td>{{ $course->start_date ? $course->start_date : 'N/A' }}</td>
                            <td>{{ $course->end_date ? $course->end_date : 'N/A' }}</td>
                            <td>{{ $course->course_schedule }}</td>
                            <td>
                                @if($course->cover_image)
                                    <a href="{{ asset('storage/' . $course->cover_image) }}" target="_blank">View/Download</a>
                                @else
                                    N/A
                                @endif
                            </td>
                            <td>{{ $course->created_at}}</td>
                            <td>{{ $course->updated_at }}</td> -->
                            <td>
                                <a href="{{ route('courses.show', $course->course_id) }}" class="btn btn-info btn-sm">View</a>
                                @if ($isAuthenticated && $userRole === 'admin')
                                    <a href="{{ route('courses.edit', $course->course_id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('courses.destroy', $course->course_id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection

@push('scripts')
    <!-- Include Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endpush

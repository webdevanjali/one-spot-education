<!-- 39. resources/views/modules/courses/edit.blade.php -->

@extends('layouts.app')

@section('title', 'Edit Course')

@section('content')
<div class="container">
    <h1>Course Details</h1>
    <table class="table table-bordered">
        <tr>
            <th>Course Name</th>
            <td>{{ $course->course_name }}</td>
        </tr>
        <tr>
            <th>Description</th>
            <td>{{ $course->description }}</td>
        </tr>
        <tr>
            <th>Teacher ID</th>
            <td>{{ $course->teacher_id }}</td>
        </tr>
        <tr>
            <th>Start Date</th>
            <td>{{ $course->start_date }}</td>
        </tr>
        <tr>
            <th>End Date</th>
            <td>{{ $course->end_date }}</td>
        </tr>
        <tr>
            <th>Course Schedule</th>
            <td>{{ $course->course_schedule }}</td>
        </tr>
        <tr>
            <th>Cover Image</th>
            <td>{{ $course->cover_image }}</td>
        </tr>
    </table>
    <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-warning">Edit</a>
    <a href="{{ route('courses.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection

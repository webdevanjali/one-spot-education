@extends('layouts.app')
@section('title', 'Create Course')

@section('content')
<div class="container">
    <h1>Create Course</h1>
    <form action="{{ route('courses.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="course_name" class="form-label">Course Name</label>
            <input type="text" class="form-control" id="course_name" name="course_name" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description"></textarea>
        </div>
        <div class="mb-3">
            <label for="teacher_id" class="form-label">Teacher ID</label>
            <input type="number" class="form-control" id="teacher_id" name="teacher_id">
        </div>
        <div class="mb-3">
            <label for="start_date" class="form-label">Start Date</label>
            <input type="date" class="form-control" id="start_date" name="start_date">
        </div>
        <div class="mb-3">
            <label for="end_date" class="form-label">End Date</label>
            <input type="date" class="form-control" id="end_date" name="end_date">
        </div>
        <div class="mb-3">
            <label for="course_schedule" class="form-label">Course Schedule</label>
            <input type="text" class="form-control" id="course_schedule" name="course_schedule">
        </div>
        <div class="mb-3">
            <label for="cover_image" class="form-label">Cover Image</label>
            <input type="text" class="form-control" id="cover_image" name="cover_image">
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endsection

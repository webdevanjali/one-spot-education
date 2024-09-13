@extends('layouts.app')

@section('title', 'Course Details | One Spot Education')

@section('content')
@php
        $isAuthenticated = Auth::check();
        $userRole = $isAuthenticated ? Auth::user()->roles->pluck('role_name')->first() : null;
    @endphp
    <div class="container">
    <a href="{{ route('courses.index') }}" class="btn btn-secondary">Back to All courses</a>

        <h1 class="mt-4">Course Details</h1>

        <!-- Course Details Display -->
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $course->course_name }}</h5>
                <p class="card-text">{!! $course->description !!}</p>
                <!-- <p class="card-text">Teacher ID: {{ $course->teacher_id }}</p>
                <p class="card-text">Start Date: {{ $course->start_date ? $course->start_date->format('Y-m-d') : 'N/A' }}</p>
                <p class="card-text">End Date: {{ $course->end_date ? $course->end_date->format('Y-m-d') : 'N/A' }}</p>
                <p class="card-text">Schedule: {{ $course->course_schedule }}</p>
                <p class="card-text">
                    Cover Image: 
                    @if($course->cover_image)
                        <a href="{{ asset('storage/' . $course->cover_image) }}" target="_blank">View/Download</a>
                    @else
                        N/A
                    @endif
                </p> -->
               
                <a href="{{ route('courses.index') }}" class="btn btn-secondary">Back to List</a>
                @if ($isAuthenticated && $userRole === 'admin')
                    <a href="{{ route('courses.edit', $course->course_id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('courses.destroy', $course->course_id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                @endif
            </div>
        </div>
    </div>
@endsection

<!-- 40. resources/views/modules/courses/show.blade.php -->

@extends('layouts.app')

@section('title', 'Show Course')

@section('content')
    <h1>{{ $course->title }}</h1>
    <p>{{ $course->description }}</p>
    <a href="{{ route('courses.index') }}" class="btn btn-secondary">Back to Courses</a>
@endsection

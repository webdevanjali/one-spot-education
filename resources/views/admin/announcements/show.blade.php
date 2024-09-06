<!-- 30. resources/views/admin/announcements/show.blade.php -->

@extends('layouts.admin')

@section('title', 'Show Announcement')

@section('content')
    <h1>{{ $announcement->title }}</h1>
    <p>{{ $announcement->content }}</p>
    <a href="{{ route('announcements.index') }}" class="btn btn-secondary">Back to Announcements</a>
@endsection

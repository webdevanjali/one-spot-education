<!-- 29. resources/views/admin/announcements/edit.blade.php -->

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

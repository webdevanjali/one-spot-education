<!-- 27. resources/views/admin/announcements/index.blade.php -->

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

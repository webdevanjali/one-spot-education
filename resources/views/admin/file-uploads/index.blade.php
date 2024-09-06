<!-- 15. resources/views/admin/file-uploads/index.blade.php -->

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

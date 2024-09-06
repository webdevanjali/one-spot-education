<!-- 18. resources/views/admin/file-uploads/show.blade.php -->

@extends('layouts.admin')

@section('title', 'Show File Upload')

@section('content')
    <h1>{{ $file->filename }}</h1>
    <p><a href="{{ asset('storage/' . $file->path) }}" target="_blank">Download File</a></p>
    <a href="{{ route('file-uploads.index') }}" class="btn btn-secondary">Back to File Uploads</a>
@endsection

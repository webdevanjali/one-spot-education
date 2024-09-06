<!-- 17. resources/views/admin/file-uploads/edit.blade.php -->

@extends('layouts.admin')

@section('title', 'Edit File Upload')

@section('content')
    <h1>Edit File Upload</h1>
    <form action="{{ route('file-uploads.update', $file->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="file">Select New File (optional)</label>
            <input type="file" id="file" name="file" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Update File</button>
    </form>
@endsection

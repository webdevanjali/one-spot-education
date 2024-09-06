<!-- 16. resources/views/admin/file-uploads/create.blade.php -->

@extends('layouts.admin')

@section('title', 'Upload File')

@section('content')
    <h1>Upload File</h1>
    <form action="{{ route('file-uploads.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="file">Select File</label>
            <input type="file" id="file" name="file" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Upload File</button>
    </form>
@endsection

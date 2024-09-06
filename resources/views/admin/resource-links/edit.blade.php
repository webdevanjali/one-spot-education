<!-- 13. resources/views/admin/resource-links/edit.blade.php -->

@extends('layouts.admin')

@section('title', 'Edit Resource Link')

@section('content')
    <h1>Edit Resource Link</h1>
    <form action="{{ route('resource-links.update', $link->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" id="title" name="title" class="form-control" value="{{ $link->title }}" required>
        </div>
        <div class="form-group">
            <label for="url">URL</label>
            <input type="url" id="url" name="url" class="form-control" value="{{ $link->url }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Resource Link</button>
    </form>
@endsection

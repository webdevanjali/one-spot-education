<!-- 12. resources/views/admin/resource-links/create.blade.php -->

@extends('layouts.admin')

@section('title', 'Create Resource Link')

@section('content')
    <h1>Create Resource Link</h1>
    <form action="{{ route('resource-links.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" id="title" name="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="url">URL</label>
            <input type="url" id="url" name="url" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Create Resource Link</button>
    </form>
@endsection

<!-- resources/views/admin/reports/create.blade.php -->
@extends('layouts.admin')

@section('title', 'Create Report')

@section('content')
    <h1>Create Report</h1>
    <form action="{{ route('reports.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" id="title" name="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea id="content" name="content" class="form-control" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Create Report</button>
    </form>
@endsection
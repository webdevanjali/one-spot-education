<!-- resources/views/admin/reports/edit.blade.php -->
@extends('layouts.admin')

@section('title', 'Edit Report')

@section('content')
    <h1>Edit Report</h1>
    <form action="{{ route('reports.update', $report->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" id="title" name="title" class="form-control" value="{{ $report->title }}" required>
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea id="content" name="content" class="form-control" rows="5" required>{{ $report->content }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update Report</button>
    </form>
@endsection

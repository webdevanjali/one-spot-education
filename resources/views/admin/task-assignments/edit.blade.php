<!-- resources/views/admin/task-assignments/edit.blade.php -->

@extends('layouts.admin')

@section('title', 'Edit Task Assignment')

@section('content')
    <h1>Edit Task Assignment</h1>
    <form action="{{ route('task-assignments.update', $task->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" id="title" name="title" class="form-control" value="{{ $task->title }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea id="description" name="description" class="form-control" rows="5" required>{{ $task->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="due_date">Due Date</label>
            <input type="date" id="due_date" name="due_date" class="form-control" value="{{ $task->due_date }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Task Assignment</button>
    </form>
@endsection
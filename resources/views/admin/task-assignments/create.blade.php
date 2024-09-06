<!-- resources/views/admin/task-assignments/create.blade.php -->
@extends('layouts.admin')

@section('title', 'Create Task Assignment')

@section('content')
    <h1>Create Task Assignment</h1>
    <form action="{{ route('task-assignments.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" id="title" name="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea id="description" name="description" class="form-control" rows="5" required></textarea>
        </div>
        <div class="form-group">
            <label for="due_date">Due Date</label>
            <input type="date" id="due_date" name="due_date" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Create Task Assignment</button>
    </form>
@endsection
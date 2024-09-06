<!-- resources/views/admin/task-assignments/index.blade.php -->
@extends('layouts.admin')

@section('title', 'Task Assignments')

@section('content')
    <h1>Task Assignments</h1>
    <a href="{{ route('task-assignments.create') }}" class="btn btn-primary">Create Task Assignment</a>
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Due Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $task)
                <tr>
                    <td>{{ $task->title }}</td>
                    <td>{{ $task->description }}</td>
                    <td>{{ $task->due_date }}</td>
                    <td>
                        <a href="{{ route('task-assignments.show', $task->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('task-assignments.edit', $task->id) }}" class="btn btn-warning">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
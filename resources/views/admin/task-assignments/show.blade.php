<!-- resources/views/admin/task-assignments/show.blade.php -->
@extends('layouts.admin')

@section('title', 'Show Task Assignment')

@section('content')
    <h1>{{ $task->title }}</h1>
    <p>{{ $task->description }}</p>
    <p>Due Date: {{ $task->due_date }}</p>
    <a href="{{ route('task-assignments.index') }}" class="btn btn-secondary">Back to Task Assignments</a>
@endsection
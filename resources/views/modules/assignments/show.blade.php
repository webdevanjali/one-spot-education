<!-- 41/. resources/views/modules/assignments/show.blade.php -->

@extends('layouts.app')

@section('title', 'Show Assignment')

@section('content')
    <h1>{{ $assignment->title }}</h1>
    <p><strong>Description:</strong> {{ $assignment->description }}</p>
    <p><strong>Due Date:</strong> {{ $assignment->due_date->format('F j, Y') }}</p>

    @if($assignment->attachments->isNotEmpty())
        <h2>Attachments</h2>
        <ul>
            @foreach($assignment->attachments as $attachment)
                <li><a href="{{ asset('storage/' . $attachment->file_path) }}" target="_blank">{{ $attachment->file_name }}</a></li>
            @endforeach
        </ul>
    @endif

    <a href="{{ route('assignments.index') }}" class="btn btn-secondary">Back to Assignments</a>
@endsection
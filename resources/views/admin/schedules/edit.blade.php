<!-- 25. resources/views/admin/schedules/edit.blade.php -->

@extends('layouts.admin')

@section('title', 'Edit Schedule')

@section('content')
    <h1>Edit Schedule</h1>
    <form action="{{ route('schedules.update', $schedule->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" id="title" name="title" class="form-control" value="{{ $schedule->title }}" required>
        </div>
        <div class="form-group">
            <label for="date">Date</label>
            <input type="date" id="date" name="date" class="form-control" value="{{ $schedule->date }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Schedule</button>
    </form>
@endsection

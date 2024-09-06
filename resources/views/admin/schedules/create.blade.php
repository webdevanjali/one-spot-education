<!-- 24. resources/views/admin/schedules/create.blade.php -->

@extends('layouts.admin')

@section('title', 'Create Schedule')

@section('content')
    <h1>Create Schedule</h1>
    <form action="{{ route('schedules.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" id="title" name="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="date">Date</label>
            <input type="date" id="date" name="date" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Create Schedule</button>
    </form>
@endsection

<!-- 23. resources/views/admin/schedules/index.blade.php -->

@extends('layouts.admin')

@section('title', 'Schedules')

@section('content')
    <h1>Schedules</h1>
    <a href="{{ route('schedules.create') }}" class="btn btn-primary">Create Schedule</a>
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($schedules as $schedule)
                <tr>
                    <td>{{ $schedule->title }}</td>
                    <td>{{ $schedule->date }}</td>
                    <td>
                        <a href="{{ route('schedules.show', $schedule->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('schedules.edit', $schedule->id) }}" class="btn btn-warning">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
<!-- 26. resources/views/admin/schedules/show.blade.php -->

@extends('layouts.admin')

@section('title', 'Show Schedule')

@section('content')
    <h1>{{ $schedule->title }}</h1>
    <p>Date: {{ $schedule->date }}</p>
    <a href="{{ route('schedules.index') }}" class="btn btn-secondary">Back to Schedules</a>
@endsection

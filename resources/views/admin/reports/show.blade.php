<!-- resources/views/admin/reports/show.blade.php -->
@extends('layouts.admin')

@section('title', 'Show Report')

@section('content')
    <h1>{{ $report->title }}</h1>
    <p>{{ $report->content }}</p>
    <a href="{{ route('reports.index') }}" class="btn btn-secondary">Back to Reports</a>
@endsection
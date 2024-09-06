<!-- resources/views/admin/reports/index.blade.php -->
@extends('layouts.admin')

@section('title', 'Reports')

@section('content')
    <h1>Reports</h1>
    <a href="{{ route('reports.create') }}" class="btn btn-primary">Create Report</a>
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reports as $report)
                <tr>
                    <td>{{ $report->title }}</td>
                    <td>
                        <a href="{{ route('reports.show', $report->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('reports.edit', $report->id) }}" class="btn btn-warning">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
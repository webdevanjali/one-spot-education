@extends('layouts.app')

@section('title', 'Student Dashboard')

@section('user-dashboard-content')
    <h2>Student Dashboard</h2>
    <!-- Student-specific content -->
    @yield('student-content')
@endsection

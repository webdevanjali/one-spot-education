@extends('layouts.userdashboard')

@section('title', 'Teacher Dashboard')

@section('user-dashboard-content')
    <h2>Teacher Dashboard</h2>
    <!-- Teacher-specific content -->
    @yield('teacher-content')
@endsection

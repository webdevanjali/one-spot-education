<!-- resources/views/admin/dashboard.blade.php -->
@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('user-dashboard-content')
  <div class="container text-center">
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light ">
      <div class="container">
        <div class="collapse navbar-collapse justify-content-center">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link text-primary" href="#">Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-primary" href="#">Classes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-primary" href="#">Grades</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-primary" href="#">Calendar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-primary" href="#">Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-primary" href="{{ route('reports.index') }}">Reports</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-primary" href="{{ route('task-assignments.index') }}">Task Assignments</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-primary" href="{{ route('resource-links.index') }}">Resource Links</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-primary" href="{{ route('file-uploads.index') }}">File Uploads</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-primary" href="{{ route('qualification-proofs.index') }}">Qualification Proofs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-primary" href="{{ route('schedules.index') }}">Schedules</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-primary" href="{{ route('notifications.index') }}">Announcements</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Main Content -->
    <h1 class="display-3 font-weight-bold text-primary" style="margin:5%;">Welcome to Your Admin Dashboard</h1>
    <p class="lead text-primary">Manage your online classes with ease</p>
    
    <!-- Buttons -->
    <div class="mt-4">
      <a href="#" class="btn btn-primary btn-lg mr-3">View Schedule</a>
      <a href="#" class="btn btn-secondary btn-lg">Learn More</a>
    </div>
  </div>
@endsection

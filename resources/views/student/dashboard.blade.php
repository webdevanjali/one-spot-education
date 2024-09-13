@extends('layouts.app')

@section('title', 'Student Dashboard')

@section('user-dashboard-content')
<div class="container text-center mt-5">
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
              <a class="nav-link text-primary" href="{{ route('faqs') }}"><strong>FAQs</strong></a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-primary" href="#">Calendar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-primary" href="#">Profile</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Main Content -->
    <h1 class="display-3 font-weight-bold text-primary" style="margin:5%;">Welcome to Your Student Dashboard</h1>
    <p class="lead text-primary">Manage your online classes with ease</p>
    
    <!-- Buttons -->
    <div class="mt-4">
      <a href="#" class="btn btn-primary btn-lg mr-3">View Schedule</a>
      <a href="#" class="btn btn-secondary btn-lg">Learn More</a>
    </div>
  </div>
@endsection


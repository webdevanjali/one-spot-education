@extends('layouts.app')

@section('Create Announcements', 'One Spot Education | Innovative learning for university students')
@push('head-css')
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Center the pagination container */
        .relative.z-0.inline-flex {
            display: flex;
            justify-content: center; /* Center horizontally */
            margin: 1rem 0; /* Vertical spacing */
        }

        /* Style pagination links */
        .relative.inline-flex a,
        .relative.inline-flex span {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 0.5rem 0.75rem;
            font-size: 0.875rem;
            color: #4a5568; /* Text color */
            background-color: #fff; /* Background color */
            border: 1px solid #ddd; /* Border color */
            border-radius: 0.375rem; /* Rounded corners */
            transition: background-color 0.2s, color 0.2s;
        }

        /* Hover and focus states */
        .relative.inline-flex a:hover,
        .relative.inline-flex a:focus {
            color: #2d3748; /* Darker text color */
            background-color: #f7fafc; /* Light background color */
            border-color: #cbd5e0; /* Border color on hover/focus */
        }

        /* Active page style */
        .relative.inline-flex .page-item.active a {
            color: #fff; /* White text color */
            background-color: #3182ce; /* Blue background */
            border-color: #3182ce; /* Blue border */
        }

        /* Disabled state */
        .relative.inline-flex .page-item.disabled a {
            color: #e2e8f0; /* Light gray text */
            background-color: #fff; /* White background */
            border-color: #e2e8f0; /* Light gray border */
            cursor: not-allowed;
        }

        /* Arrow icon size */
        .relative.inline-flex a svg {
            width: 1rem; /* Set width */
            height: 1rem; /* Set height */
        }

        /* Ensure the arrow icons are visible */
        .relative.inline-flex a[aria-label*="Previous"]::before {
            content: "<<";
            font-size: 1rem; /* Size of text arrows */
            color: #4a5568; /* Text color */
            margin-right: 0.25rem; /* Space between arrow and text */
        }

        .relative.inline-flex a[aria-label*="Next"]::after {
            content: ">>";
            font-size: 1rem; /* Size of text arrows */
            color: #4a5568; /* Text color */
            margin-left: 0.25rem; /* Space between arrow and text */
        }
    </style>
@endpush

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4">Create Announcement</h1>

        <form action="{{ route('announcements.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="labels">Labels</label>
                <input type="text" name="labels" id="labels" class="form-control">
            </div>
            <div class="form-group" hidden>
                <label for="created_by">Created By</label>
                <input type="text" name="created_by" id="created_by" class="form-control" value="1">
            </div>
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea name="message" id="message" rows="4" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="media">Media</label>
                <input type="text" name="media" id="media" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Create Announcement</button>
            <a href="{{ route('announcements.index') }}" class="btn btn-secondary">Back to List</a>
        </form>
    </div>
@endsection


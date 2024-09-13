<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Announcements</title>
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
</head>
<body>


@php
    $isAuthenticated = Auth::check();
    $userRole = $isAuthenticated ? Auth::user()->roles->pluck('role_name')->first() : null;
@endphp

@if ($isAuthenticated && $userRole === 'admin')
    <div class="container mt-4">
        <h1 class="mb-4">Announcements</h1>
        <a href="{{ route('announcements.create') }}" class="btn btn-primary mb-3">Create New Announcement</a>

        <!-- Filter Form -->
        <form method="GET" action="{{ route('announcements.index') }}" class="mb-4">
            <div class="form-group">
                <label for="filterLabel">Filter by Label:</label>
                <input type="text" name="label" id="filterLabel" value="{{ request('label') }}" class="form-control" placeholder="Enter label">
            </div>
            <button type="submit" class="btn btn-secondary">Filter</button>
            <a href="{{ route('announcements.index', ['all' => 'true']) }}" class="btn btn-info ml-2">Display All</a>
        </form>

        <!-- Success Message -->
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Announcements Table -->
        @if ($announcements->isEmpty())
            <p>No announcements available.</p>
        @else
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Labels</th>
                        <th>Created By</th>
                        <th>Title</th>
                        <th>Message</th>
                        <th>Media</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($announcements as $announcement)
                        <tr>
                            <td>{{ $announcement->announcement_id }}</td>
                            <td>{{ $announcement->labels }}</td>
                            <td>{{ $announcement->created_by }}</td>
                            <td>{{ $announcement->title }}</td>
                            <td>{{ $announcement->message }}</td>
                            <td>
                                @if($announcement->media)
                                    <a href="{{ asset('storage/' . $announcement->media) }}" target="_blank">View/Download</a>
                                @else
                                    N/A
                                @endif
                            </td>
                            <td>{{ $announcement->created_at->format('Y-m-d H:i:s') }}</td>
                            <td>{{ $announcement->updated_at->format('Y-m-d H:i:s') }}</td>
                            <td>
                                <a href="{{ route('announcements.show', $announcement->announcement_id) }}" class="btn btn-info btn-sm">View</a>
                                <a href="{{ route('announcements.edit', $announcement->announcement_id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('announcements.destroy', $announcement->announcement_id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- Pagination Controls -->
            <div class="d-flex justify-content-between">
                @if ($announcements->hasPages())
                    <nav>
                        {{ $announcements->links() }}
                    </nav>
                @endif
                <div>
                    <a href="{{ route('announcements.index', ['all' => 'true']) }}" class="btn btn-info">Display All</a>
                </div>
            </div>
        @endif
    </div>

@else
    <div class="container mt-4">
        <h1 class="mb-4">Announcements</h1>

        <!-- Filter Form -->
        <form method="GET" action="{{ route('announcements.index') }}" class="mb-4">
            <div class="form-group">
                <label for="filterLabel">Filter by Label:</label>
                <input type="text" name="label" id="filterLabel" value="{{ request('label') }}" class="form-control" placeholder="Enter label">
            </div>
            <button type="submit" class="btn btn-secondary">Filter</button>
            <a href="{{ route('announcements.index', ['all' => 'true']) }}" class="btn btn-info ml-2">Display All</a>
        </form>

        <!-- Success Message -->
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Announcements Table -->
        @if ($announcements->isEmpty())
            <p>No announcements available.</p>
        @else
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Message</th>
                        <th>Media</th>
                        <th>Published on</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($announcements as $announcement)
                        <tr>
                            <td>{{ $announcement->announcement_id }}</td>
                            <td>{{ $announcement->title }}</td>
                            <td>{{ $announcement->message }}</td>
                            <td>
                                @if($announcement->media)
                                    <a href="{{ asset('storage/' . $announcement->media) }}" target="_blank">View/Download</a>
                                @else
                                    N/A
                                @endif
                            </td>
                            <td>
                                @if($announcement->updated_at)
                                    {{ $announcement->updated_at->format('Y-m-d H:i:s') }}
                                @elseif($created->updated_at)
                                    {{ $created->updated_at->format('Y-m-d H:i:s') }}
                                @endif
                            </td>

                            
                            <td>
                                <a href="{{ route('announcements.show', $announcement->announcement_id) }}" class="btn btn-info btn-sm">View</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- Pagination Controls -->
            <div class="d-flex justify-content-between">
                @if ($announcements->hasPages())
                    <nav>
                        {{ $announcements->links() }}
                    </nav>
                @endif
                <div>
                    <a href="{{ route('announcements.index', ['all' => 'true']) }}" class="btn btn-info">Display All</a>
                </div>
            </div>
        @endif
    </div>
@endif

    <!-- Include Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

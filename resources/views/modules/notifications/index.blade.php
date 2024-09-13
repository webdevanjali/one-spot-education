@extends('layouts.app')

@section('title', 'All Announcements | One Spot Education | Innovative learning for university students')

@section('content')
    @php
        $isAuthenticated = Auth::check();
        $userRole = $isAuthenticated ? Auth::user()->roles->pluck('role_name')->first() : null;
    @endphp

    <div class="container">
        <h1 class="mt-4">Notifications</h1>
        @if ($isAuthenticated && $userRole === 'admin')
            <a href="{{ route('notifications.create') }}" class="btn btn-primary mb-3">Create New Notification</a>
        @endif
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        
        @if ($notifications->isEmpty())
            <p>No notifications available.</p>
        @else
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($notifications as $notification)
                        <tr>
                            <td>{{ $notification->notification_id }}</td>
                            <td>{{ $notification->title }}</td>
                            <td>
                                <a href="{{ route('notifications.show', $notification->notification_id) }}" class="btn btn-info btn-sm">View</a>
                                @if ($isAuthenticated && $userRole === 'admin')
                                    <a href="{{ route('notifications.edit', $notification->notification_id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('notifications.destroy', $notification->notification_id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection

@push('scripts')
    <!-- Include Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endpush
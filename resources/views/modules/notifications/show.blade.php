<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notification Details</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .notification-card {
            margin-bottom: 1.5rem;
        }
        .card-header {
            font-size: 1.25rem;
            font-weight: bold;
        }
        .card-body {
            padding: 1.25rem;
        }
        .card-footer {
            text-align: right;
            padding: 0.75rem;
        }
        .notification-time {
            font-size: 0.875rem;
            color: #6c757d;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <h1 class="mb-4">Notification Details</h1>

        <!-- Notification Card -->
        <div class="card notification-card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <span>{{ $notification->notification_type }}</span>
                <span class="notification-time">{{ $notification->created_at }}</span>
            </div>
            <div class="card-body">
                <h5 class="card-title">{{ $notification->title }}</h5>
                <p class="card-text">{{ $notification->message }}</p>
                @if($notification->media)
                    <a href="{{ asset('storage/' . $notification->media) }}" class="btn btn-info" target="_blank">View/Download Media</a>
                @endif
            </div>
            <div class="card-footer">
                <a href="{{ route('notifications.index') }}" class="btn btn-primary">Back to List</a>
                <a href="{{ route('notifications.edit', $notification->notification_id) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('notifications.destroy', $notification->notification_id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>

            </div>
        </div>
    </div>

    <!-- Include Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

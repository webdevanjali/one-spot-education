<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Announcement Details</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h1 class="mb-4">Announcement Details</h1>

        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <span>{{ $announcement->created_at->format('Y-m-d H:i:s') }}</span>
                <span>{{ $announcement->labels }}</span>
            </div>
            <div class="card-body">
                <h5 class="card-title">{{ $announcement->title }}</h5>
                <p class="card-text">{{ $announcement->message }}</p>
                @if($announcement->media)
                    <a href="{{ asset('storage/' . $announcement->media) }}" class="btn btn-info" target="_blank">View/Download Media</a>
                @endif
            </div>
            <div class="card-footer text-center">
                <a href="{{ route('announcements.edit', $announcement->announcement_id) }}" class="btn btn-warning">Edit</a>
                <a href="{{ route('announcements.index') }}" class="btn btn-primary">Back to List</a>
            </div>
        </div>
    </div>

    <!-- Include Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

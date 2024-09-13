<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Announcement</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h1 class="mb-4">Create Announcement</h1>

        <form action="{{ route('announcements.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="labels">Labels</label>
                <input type="text" name="labels" id="labels" class="form-control">
            </div>
            <div class="form-group">
                <label for="created_by">Created By</label>
                <input type="text" name="created_by" id="created_by" class="form-control">
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

    <!-- Include Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

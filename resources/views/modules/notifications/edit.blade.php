<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Notification</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Edit Notification</h1>

        <form action="{{ route('notifications.update', $notification->notification_id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $notification->title) }}" required>
                @error('title')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="message">Message:</label>
                <textarea name="message" id="message" class="form-control" rows="4" required>{{ old('message', $notification->message) }}</textarea>
                @error('message')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="read_status">Read Status:</label>
                <select name="read_status" id="read_status" class="form-control" required>
                    <option value="1" {{ old('read_status', $notification->read_status) == '1' ? 'selected' : '' }}>Read</option>
                    <option value="0" {{ old('read_status', $notification->read_status) == '0' ? 'selected' : '' }}>Unread</option>
                </select>
                @error('read_status')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="notification_type">Notification Type:</label>
                <input type="text" name="notification_type" id="notification_type" class="form-control" value="{{ old('notification_type', $notification->notification_type) }}" required>
                @error('notification_type')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="media">Media (optional):</label>
                <input type="file" name="media" id="media" class="form-control-file">
                @if($notification->media)
                    <div class="mt-2">
                        <p>Current File: <a href="{{ asset('storage/' . $notification->media) }}" target="_blank">View File</a></p>
                    </div>
                @endif
                @error('media')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>

        </form>
        <div class="card-footer text-center justify">
            <button type="submit" class="btn btn-primary">Update Notification</button>
            <a href="{{ route('notifications.show',$notification->notification_id) }}" class="btn btn-secondary">cancel</a>
            <form action="{{ route('notifications.destroy', $notification->notification_id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>
</body>
</html>

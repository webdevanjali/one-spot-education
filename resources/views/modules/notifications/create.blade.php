<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Notification</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Create Notification</h1>

        <form action="{{ route('notifications.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="user_id">User ID:</label>
                <input type="text" name="user_id" id="user_id" class="form-control" value="{{ old('user_id') }}" required>
                @error('user_id')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}" required>
                @error('title')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="message">Message:</label>
                <textarea name="message" id="message" class="form-control" rows="4" required>{{ old('message') }}</textarea>
                @error('message')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group" hidden>
                <label for="read_status">Read Status:</label>
                <select name="read_status" id="read_status" class="form-control" required>
                    <option value="0" {{ old('read_status') == '0' ? 'selected' : '' }} selected="selected">Unread</option>
                    <option value="1" {{ old('read_status') == '1' ? 'selected' : '' }}>Read</option>
                </select>
                @error('read_status')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="notification_type">Notification Type:</label>
                <input type="text" name="notification_type" id="notification_type" class="form-control" value="{{ old('notification_type') }}" required>
                @error('notification_type')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="media">Media (optional):</label>
                <input type="file" name="media" id="media" class="form-control-file">
                @error('media')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Save Notification</button>
        </form>
    </div>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>
    <!-- <form id="registration-form">  -->
    <form method="POST" action="{{ url('register') }}"> 

        @csrf
        <label>Name:</label>
        <input type="text" name="name" required>
        <br>
        <label>Email:</label>
        <input type="email" name="email" required>
        <br>
        <label>Password:</label>
        <input type="password" name="password" required>
        <br>
        <label>Confirm Password:</label>
        <input type="password" name="password_confirmation" required>
        <br>
        <button type="submit">Register</button>
    </form>
    <a href="{{ url('login') }}">Login</a>
    <script>
        document.getElementById('registration-form').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent the default form submission

            let formData = new FormData(this);

            fetch('{{ route('register') }}', { // Adjust route name as necessary
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.message) {
                    alert(data.message); // Display the success message
                }
                if (data.redirect) {
                    window.location.href = data.redirect; // Optionally redirect if needed
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
        });
    </script>
</body>
</html>

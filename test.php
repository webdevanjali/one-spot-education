<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Verification</title>
</head>
<body>
    <h1>Password Verification</h1>
    <form method="post" action="">
        <label for="hashedPassword1">Hashed Password 1:</label><br>
        <input type="text" id="hashedPassword1" name="hashedPassword1" required><br><br>

        <label for="hashedPassword2">Hashed Password 2:</label><br>
        <input type="text" id="hashedPassword2" name="hashedPassword2" required><br><br>

        <label for="passwords">Possible Passwords (comma-separated):</label><br>
        <input type="text" id="passwords" name="passwords" required><br><br>

        <input type="submit" value="Verify Passwords">
    </form>

    <div>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $hashedPassword1 = $_POST['hashedPassword1'];
            $hashedPassword2 = $_POST['hashedPassword2'];
            $passwordsInput = $_POST['passwords'];

            // Split the input passwords into an array
            $passwords = array_map('trim', explode(',', $passwordsInput));

            // Function to verify passwords against two hashes
            foreach ($passwords as $password) {
                $isValid1 = password_verify($password, $hashedPassword1);
                $isValid2 = password_verify($password, $hashedPassword2);
                
                if ($isValid1) {
                    echo "Woohoo!! '$password' is valid for Hash 1.<br>";
                } elseif ($isValid2) {
                    echo "Woohoo!! '$password' is valid for Hash 2.<br>";
                } else {
                    $hashedPass = password_hash($password, PASSWORD_BCRYPT);
                    echo "Password '$password' is invalid. New hash: '$hashedPass'<br>";
                }
            }
        }
        ?>
    </div>
</body>
</html>


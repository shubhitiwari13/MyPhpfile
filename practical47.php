<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
</head>
<body>
    <h2>User Registration</h2>
    <form method="post" action="register.php">
        <label for="username">Username:</label><br>
        <input type="text" name="username" id="username"><br><br>

        <label for="email">Email:</label><br>
        <input type="email" name="email" id="email"><br><br>

        <label for="password">Password:</label><br>
        <input type="password" name="password" id="password"><br><br>

        <input type="submit" value="Register">
    </form>

    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validation: check if fields are empty
    if (empty($username) || empty($email) || empty($password)) {
        echo "<h3 style='color:red;'>Error: All fields are required!</h3>";
    } else {
        // Securely output (prevent XSS)
        $username = htmlspecialchars($username);
        $email = htmlspecialchars($email);

        echo "<h2>Registration Successful!</h2>";
        echo "<p><b>Username:</b> $username</p>";
        echo "<p><b>Email:</b> $email</p>";
        echo "<p><b>Password:</b> (hidden for security)</p>";
    }
} else {
    echo "Invalid request!";
}
?>

</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Simple Login</title>
</head>
<body>
    <h2>Login Form</h2>
    <form action="login.php" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required><br><br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br><br>

        <input type="submit" value="Login">
    </form>

    <?php
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Predefined login values
    $correctUser = "admin";
    $correctPass = "12345";

    if ($username === $correctUser && $password === $correctPass) {
        echo "<h2>Login successful!</h2>";
    } else {
        echo "<h2 style='color:red;'>Invalid credentials</h2>";
    }
} else {
    echo "Form not submitted!";
}
?>

</body>
</html>

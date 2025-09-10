<!DOCTYPE html>
<html>
<head>
    <title>Feedback Form</title>
</head>
<body>
    <h2>Feedback Form</h2>
    <form method="post" action="submit.php">
        <label for="name">Name:</label><br>
        <input type="text" name="name" id="name" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" name="email" id="email" required><br><br>

        <label for="message">Message:</label><br>
        <textarea name="message" id="message" required></textarea><br><br>

        <input type="submit" value="Submit Feedback">
    </form>

    <?php
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
    $name = urlencode($_POST['name']); // Encode for safe URL use
    // Normally, you would save the feedback into a database or send an email here.
    header("Location: thankyou.php?name=$name");
    exit();
} else {
    echo "Form not submitted properly!";
}
?>
<?php
if (isset($_GET['name'])) {
    $name = htmlspecialchars($_GET['name']); // security against XSS
    echo "<h2>Thank you, $name! Your feedback has been submitted.</h2>";
} else {
    echo "No feedback data received!";
}
?>

</body>
</html>

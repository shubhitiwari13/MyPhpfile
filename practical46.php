<!DOCTYPE html>
<html>
<head>
    <title>Contact Form</title>
</head>
<body>
    <h2>Contact Us</h2>
    <form method="get" action="thankyou.php">
        <label for="name">Name:</label><br>
        <input type="text" name="name" id="name" required><br><br>

        <label for="subject">Subject:</label><br>
        <input type="text" name="subject" id="subject" required><br><br>

        <label for="message">Message:</label><br>
        <textarea name="message" id="message" required></textarea><br><br>

        <input type="submit" value="Send">
    </form>
    <?php
if (isset($_GET['name'])) {
    $name = htmlspecialchars($_GET['name']); // prevent XSS
    echo "<h2>Thank you, $name, we will contact you soon!</h2>";
} else {
    echo "No name provided!";
}
?>

</body>
</html>

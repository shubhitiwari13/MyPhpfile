<!DOCTYPE html>
<html>
<head>
    <title>Favorite Programming Language</title>
</head>
<body>
    <h2>Which is your favorite programming language?</h2>
    <form method="post" action="">
        <input type="radio" name="language" value="PHP" required> PHP <br>
        <input type="radio" name="language" value="JavaScript"> JavaScript <br>
        <input type="radio" name="language" value="Python"> Python <br><br>

        <input type="submit" value="Submit">
    </form>

    <hr>

    <?php
    if (isset($_POST['language'])) {
        $choice = $_POST['language'];
        echo "<h3>Your favorite programming language is: <u>$choice</u></h3>";
    }
    ?>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Online Quiz</title>
</head>
<body>
    <h2>Simple Quiz</h2>
    <form method="post" action="">
        <!-- Question 1 -->
        <p>1. Which language is used for server-side scripting?</p>
        <input type="radio" name="q1" value="PHP" required> PHP <br>
        <input type="radio" name="q1" value="HTML"> HTML <br>
        <input type="radio" name="q1" value="CSS"> CSS <br>

        <!-- Question 2 -->
        <p>2. Which tag is used to create a hyperlink in HTML?</p>
        <input type="radio" name="q2" value="a" required> &lt;a&gt; <br>
        <input type="radio" name="q2" value="p"> &lt;p&gt; <br>
        <input type="radio" name="q2" value="h1"> &lt;h1&gt; <br>

        <!-- Question 3 -->
        <p>3. Which symbol is used for comments in PHP?</p>
        <input type="radio" name="q3" value="//" required> // <br>
        <input type="radio" name="q3" value="<!-- -->">&lt;!-- --&gt; <br>
        <input type="radio" name="q3" value="##"> ## <br><br>

        <input type="submit" value="Submit Quiz">
    </form>

    <hr>

    <?php
    if (isset($_POST['q1']) && isset($_POST['q2']) && isset($_POST['q3'])) {
        $score = 0;

        // Correct answers
        if ($_POST['q1'] === "PHP") $score++;
        if ($_POST['q2'] === "a") $score++;
        if ($_POST['q3'] === "//") $score++;

        echo "<h3>Your Score: $score / 3</h3>";
    }
    ?>
</body>
</html>

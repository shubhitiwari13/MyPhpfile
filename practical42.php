<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>
    <h2>Calculator</h2>
    <form method="post" action="">
        <label for="num1">Number 1:</label>
        <input type="number" name="num1" id="num1" required><br><br>

        <label for="num2">Number 2:</label>
        <input type="number" name="num2" id="num2" required><br><br>

        <label for="operation">Operation:</label>
        <select name="operation" id="operation" required>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select><br><br>

        <input type="submit" value="Calculate">
    </form>

    <hr>

    <?php
    if (isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['operation'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];
        $result = "";

        switch ($operation) {
            case '+':
                $result = $num1 + $num2;
                break;
            case '-':
                $result = $num1 - $num2;
                break;
            case '*':
                $result = $num1 * $num2;
                break;
            case '/':
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    $result = "Error: Division by zero!";
                }
                break;
        }

        echo "<h3>Result: $num1 $operation $num2 = $result</h3>";
    }
    ?>
</body>
</html>


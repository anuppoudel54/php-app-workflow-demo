<!DOCTYPE html>
<html>
<head>
    <title>PHP Calculator</title>
</head>
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="num1">Number 1:</label>
        <input type="text" name="num1" id="num1"><br><br>
        <label for="num2">Number 2:</label>
        <input type="text" name="num2" id="num2"><br><br>
        <label for="operator">Operator:</label>
        <select name="operator" id="operator">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select><br><br>
        <input type="submit" value="Calculate">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operator = $_POST["operator"];
        
        if (!empty($num1) && !empty($num2)) {
            if ($operator == '+') {
                $result = $num1 + $num2;
            } elseif ($operator == '-') {
                $result = $num1 - $num2;
            } elseif ($operator == '*') {
                $result = $num1 * $num2;
            } elseif ($operator == '/') {
                $result = $num1 / $num2;
            } else {
                $result = "Invalid operator";
            }
            echo "<br><strong>Result:</strong> $result";
        } else {
            echo "Please enter both numbers.";
        }
    }
    ?>
</body>
</html>

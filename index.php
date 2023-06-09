<!DOCTYPE html>
<html>
<head>
    <title>PHP Scientific Calculator</title>
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
            <option value="sqrt">Square Root</option>
            <option value="pow">Power</option>
            <option value="sin">Sine</option>
            <option value="cos">Cosine</option>
            <option value="tan">Tangent</option>
        </select><br><br>
        <input type="submit" value="Calculate">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operator = $_POST["operator"];

        $result = "";

        if (!empty($num1)) {
            if ($operator == 'sqrt') {
                $result = sqrt($num1);
            } elseif (empty($num2)) {
                $result = "Please enter both numbers.";
            } else {
                if ($operator == '+') {
                    $result = $num1 + $num2;
                } elseif ($operator == '-') {
                    $result = $num1 - $num2;
                } elseif ($operator == '*') {
                    $result = $num1 * $num2;
                } elseif ($operator == '/') {
                    $result = $num1 / $num2;
                } elseif ($operator == 'pow') {
                    $result = pow($num1, $num2);
                } elseif ($operator == 'sin') {
                    $result = sin($num1);
                } elseif ($operator == 'cos') {
                    $result = cos($num1);
                } elseif ($operator == 'tan') {
                    $result = tan($num1);
                } else {
                    $result = "Invalid operator";
                }
            }

            echo "<br><strong>Result:</strong> $result";
        }
    }
    ?>
</body>
</html>

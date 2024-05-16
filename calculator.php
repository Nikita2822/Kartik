<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>

<h2>PHP Calculator</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <input type="text" name="num1" placeholder="Enter number 1"><br><br>
    <input type="text" name="num2" placeholder="Enter number 2"><br><br>
    <select name="operator">
        <option value="+">Addition (+)</option>
        <option value="-">Subtraction (-)</option>
        <option value="*">Multiplication (*)</option>
        <option value="/">Division (/)</option>
    </select><br><br>
    <input type="submit" name="calculate" value="Calculate">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operator = $_POST["operator"];
    $result = '';

    switch ($operator) {
        case "+":
            $result = $num1 + $num2;
            break;
        case "-":
            $result = $num1 - $num2;
            break;
        case "*":
            $result = $num1 * $num2;
            break;
        case "/":
            if ($num2 == 0) {
                $result = "Cannot divide by zero";
            } else {
                $result = $num1 / $num2;
            }
            break;
        default:
            $result = "Invalid operator";
    }

    echo "Result: " . $result;
}
?>

</body>
</html>

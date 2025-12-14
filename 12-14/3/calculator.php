<!DOCTYPE html>
<html>
<head>
    <title>PHP Calculator</title>
</head>
<body>

<h2>Simple Calculator</h2>

<form method="post">
    <input type="number" name="num1" step="any" placeholder="First Number" required>
    
    <select name="operation" required>
        <option value="">Select Operation</option>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>

    <input type="number" name="num2" step="any" placeholder="Second Number" required>

    <button type="submit" name="calculate">Calculate</button>
</form>

<?php
if (isset($_POST['calculate'])) {

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $op   = $_POST['operation'];
    $result = "";

    switch ($op) {
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
            $result = "Invalid Operation";
    }

    echo "<h3>Result: $result</h3>";
}
?>

</body>
</html>

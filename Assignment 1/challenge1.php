<!DOCTYPE html>
<html>
<head>
    <title>PHP Calculator</title>
</head>
<body>
    <h2>Simple PHP Calculator</h2>
    <form method="post">
        Enter First Number: <input type="number" name="num1" required><br><br>
        Enter Second Number: <input type="number" name="num2" required><br><br>
        <input type="submit" name="calculate" value="Calculate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

        if ($num2 == 0) {
            echo "<p style='color:red;'>Division and modulus by zero are not allowed!</p>";
        } else {
            echo "<h3>Results:</h3>";
            echo "Addition: " . ($num1 + $num2) . "<br>";
            echo "Subtraction: " . ($num1 - $num2) . "<br>";
            echo "Multiplication: " . ($num1 * $num2) . "<br>";
            echo "Division: " . ($num1 / $num2) . "<br>";
            echo "Modulus: " . ($num1 % $num2) . "<br>";
        }
    }
    ?>
</body>
</html>

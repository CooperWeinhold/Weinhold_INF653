<!DOCTYPE html>
<html>
<head>
    <title>Even or Odd Checker</title>
</head>
<body>
    <h2>Check if a Number is Even or Odd</h2>
    <form method="post">
        Enter an Integer: <input type="number" name="number" required><br><br>
        <input type="submit" name="check" value="Check">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST['number'];

        if ($number % 2 == 0) {
            echo "<h3>$number is an Even number.</h3>";
        } else {
            echo "<h3>$number is an Odd number.</h3>";
        }
    }
    ?>
</body>
</html>

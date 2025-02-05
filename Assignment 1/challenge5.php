<!DOCTYPE html>
<html>
<head>
    <title>Leap Year Checker</title>
</head>
<body>
    <h2>Leap Year Checker</h2>
    <form method="post">
        Enter a year: <input type="number" name="year" required><br><br>
        <input type="submit" name="check" value="Check">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $year = $_POST['year']; // Get the year input from the user

        // Check if the year is a leap year
        if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
            echo "<h3>Input: $year</h3>";
            echo "<h3>Output: $year is a leap year.</h3>";
        } else {
            echo "<h3>Input: $year</h3>";
            echo "<h3>Output: $year is not a leap year.</h3>";
        }
    }
    ?>
</body>
</html>

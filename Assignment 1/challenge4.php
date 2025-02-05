<!DOCTYPE html>
<html>
<head>
    <title>Grade Calculator</title>
</head>
<body>
    <h2>Grade Calculator</h2>
    <form method="post">
        Enter your marks: <input type="number" name="marks" min="0" max="100" required><br><br>
        <input type="submit" name="submit" value="Get Grade">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $marks = $_POST['marks']; // Get the marks from the form

        if ($marks >= 90) {
            $grade = "A";
        } elseif ($marks >= 80) {
            $grade = "B";
        } elseif ($marks >= 70) {
            $grade = "C";
        } elseif ($marks >= 60) {
            $grade = "D";
        } else {
            $grade = "F";
        }

        echo "<h3>Input: $marks</h3>";
        echo "<h3>Output: You got a $grade!</h3>";
    }
    ?>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Increment and Decrement Example</title>
</head>
<body>
    <h2>Increment and Decrement Example</h2>
    <form method="post">
        Enter a number: <input type="number" name="number" required><br><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST['number']; // Get the input number from the form

        echo "<p>Starting number: $number</p>";

        $number++; // Increment the number
        echo "<p>After increment: $number</p>";

        $number--; // Decrement the number
        echo "<p>After decrement: $number</p>";
    }
    ?>
</body>
</html>

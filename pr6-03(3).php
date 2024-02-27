<!DOCTYPE html>
<html>

<head>
    <title>Practical 6-03(3)</title>
</head>

<body>
    <h2>Trigonometric Functions Calculator</h2>
    <form method="post">
        <label for="angle">Enter an angle in degrees:</label><br>
        <input type="number" id="angle" name="angle" required><br>
        <input type="submit" name="submit" value="Calculate">
    </form>

    <?php
    function calculateTrigFunctions($angle)
    {
        $angleRad = deg2rad($angle);
        $sin = sin($angleRad);
        $cos = cos($angleRad);
        $tan = tan($angleRad);
        return array($sin, $cos, $tan);
    }

    if (isset($_POST['submit'])) {
        $angle = $_POST['angle'];

        list($sin, $cos, $tan) = calculateTrigFunctions($angle);

        echo "<p>Sine of $angle degrees: $sin</p>";
        echo "<p>Cosine of $angle degrees: $cos</p>";
        echo "<p>Tangent of $angle degrees: $tan</p>";
    }
    ?>
</body>

</html>
<!DOCTYPE html>
<html>

<head>
    <title>Practical 6-03(1)</title>
</head>

<body>
    <h2>Random Number Generator</h2>
    <form method="post">
        <label for="minRange">Enter minimum value:</label><br>
        <input type="number" id="minRange" name="minRange" required><br>
        <label for="maxRange">Enter maximum value:</label><br>
        <input type="number" id="maxRange" name="maxRange" required><br>
        <input type="submit" name="submit" value="Generate">
    </form>

    <?php
    function generateRandomNumber($min, $max)
    {
        return rand($min, $max);
    }

    if (isset($_POST['submit'])) {
        $minRange = $_POST['minRange'];
        $maxRange = $_POST['maxRange'];

        $randomNumber = generateRandomNumber($minRange, $maxRange);

        echo "<p>Random number between $minRange and $maxRange: $randomNumber</p>";
    }
    ?>
</body>

</html>
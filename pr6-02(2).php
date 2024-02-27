<!DOCTYPE html>
<html>

<head>
    <title>Practical 6-02(2)</title>
</head>

<body>
    <h2>String Reversal</h2>
    <form method="post">
        <label for="inputString">Enter a string:</label><br>
        <input type="text" id="inputString" name="inputString" required><br>
        <input type="submit" name="submit" value="Reverse">
    </form>

    <?php
    function reverseString($str)
    {
        return strrev($str);
    }

    if (isset($_POST['submit'])) {
        $inputString = $_POST['inputString'];

        $reversedString = reverseString($inputString);

        echo "<p>Reversed string: $reversedString</p>";
    }
    ?>
</body>

</html>
<!DOCTYPE html>
<html>

<head>
    <title>Practical 5-01</title>
</head>

<body>
    <h2>String Length and Word Count Calculator</h2>
    <form method="post">
        <label for="inputString">Enter a string:</label><br>
        <textarea id="inputString" name="inputString" rows="4" cols="50" required></textarea><br>
        <input type="submit" name="submit" value="Calculate">
    </form>

    <?php
    function calculateStringLength($str)
    {
        $length = 0;
        while (isset($str[$length])) {
            $length++;
        }
        return $length;
    }
    function countWords($str)
    {
        $wordCount = 0;
        $isWord = false;

        for ($i = 0; isset($str[$i]); $i++) {
            if ($str[$i] != ' ' && $str[$i] != "\t" && $str[$i] != "\n") {
                if (!$isWord) {
                    $wordCount++;
                    $isWord = true;
                }
            } else {
                $isWord = false;
            }
        }
        return $wordCount;
    }

    if (isset($_POST['submit'])) {
        $inputString = $_POST['inputString'];
        echo "<h3>Result:</h3>";
        echo "Length of the string: " . calculateStringLength($inputString) . "<br>";
        echo "Number of words in the string: " . countWords($inputString) . "<br>";
    }
    ?>
</body>

</html>
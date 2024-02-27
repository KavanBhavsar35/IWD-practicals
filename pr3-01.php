<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical 3-01</title>
</head>

<body>
    <h1>Calculator</h1>
    <form method="post">
        <label for="n1">Number 1</label>
        <input type="number" name="n1" placeholder="Enter number 1" required><br>
        <label for="n2">Number 2</label>
        <input type="number" name="n2" placeholder="Enter number 2" required><br>
        <select name="operator" required>
            <option selected>Chooese operation</option>
            <option value="1">+</option>
            <option value="2">-</option>
            <option value="3">*</option>
            <option value="4">/</option>
            <option value="5">%</option>
        </select><br>
        <input type="submit">
    </form>
</body>

</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $operator = $_POST['operator'];
    if ($operator == '1') {
        $ans = $n1 + $n2;
    } else if ($operator == '2') {
        $ans = $n1 - $n2;
    } else if ($operator == "3") {
        $ans = $n1 * $n2;
    } else if ($operator == "4") {
        $ans = $n1 / $n2;
    } else if ($operator == "5") {
        $ans = $n1 % $n2;
    } else {
        $ans = "Please select an operator";
    }
    echo $ans;
}
?>
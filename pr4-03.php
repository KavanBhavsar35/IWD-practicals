<?php
function Fibonacci($number)
{
    if ($number == 0)
        return 0;
    else if ($number == 1)
        return 1;
    else
        return (Fibonacci($number - 1) + Fibonacci($number - 2));
}

$number = $_POST['num'];
for ($counter = 0; $counter < $number; $counter++) {
    echo Fibonacci($counter), ' ';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical 4-03</title>
</head>

<body>
    <H1>Fibonacci series</H1>
    <form method="post">
        <label for="num">
            <input type="text" name="num" placeholder="Enter a number" required>
        </label>
        <input type="submit">
    </form>
</body>

</html>
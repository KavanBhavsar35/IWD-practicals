<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['age'] = $_POST['age'];
    header("Location: pr9-01.php");
    exit;
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Practical 9-01 (Page 2)</title>
</head>

<body>

    <h2>Page 2</h2>

    <?php
    if (isset($_SESSION['name']) && isset($_SESSION['age'])) {
        $name = $_SESSION['name'];
        $age = $_SESSION['age'];
        echo "<p>Name: $name</p>";
        echo "<p>Age: $age</p>";
    } else {
        echo "<p>No information received!</p>";
    }
    ?>

</body>

</html>
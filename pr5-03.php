<!DOCTYPE html>
<html>

<head>
    <title>Practical 5-03</title>
</head>

<body>
    <h2>Matrix Multiplication</h2>
    <form method="post">
        <h3>Enter values for Matrix A:</h3>
        <input type="text" name="a11" placeholder="A[1][1]" required>
        <input type="text" name="a12" placeholder="A[1][2]" required>
        <input type="text" name="a13" placeholder="A[1][3]" required><br>
        <input type="text" name="a21" placeholder="A[2][1]" required>
        <input type="text" name="a22" placeholder="A[2][2]" required>
        <input type="text" name="a23" placeholder="A[2][3]" required><br>
        <input type="text" name="a31" placeholder="A[3][1]" required>
        <input type="text" name="a32" placeholder="A[3][2]" required>
        <input type="text" name="a33" placeholder="A[3][3]" required><br>

        <h3>Enter values for Matrix B:</h3>
        <input type="text" name="b11" placeholder="B[1][1]" required>
        <input type="text" name="b12" placeholder="B[1][2]" required>
        <input type="text" name="b13" placeholder="B[1][3]" required><br>
        <input type="text" name="b21" placeholder="B[2][1]" required>
        <input type="text" name="b22" placeholder="B[2][2]" required>
        <input type="text" name="b23" placeholder="B[2][3]" required><br>
        <input type="text" name="b31" placeholder="B[3][1]" required>
        <input type="text" name="b32" placeholder="B[3][2]" required>
        <input type="text" name="b33" placeholder="B[3][3]" required><br>

        <input type="submit" name="submit" value="Multiply">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $a = array(
            array($_POST['a11'], $_POST['a12'], $_POST['a13']),
            array($_POST['a21'], $_POST['a22'], $_POST['a23']),
            array($_POST['a31'], $_POST['a32'], $_POST['a33'])
        );

        $b = array(
            array($_POST['b11'], $_POST['b12'], $_POST['b13']),
            array($_POST['b21'], $_POST['b22'], $_POST['b23']),
            array($_POST['b31'], $_POST['b32'], $_POST['b33'])
        );
        function multiplyMatrix($a, $b)
        {
            $result = array();
            for ($i = 0; $i < 3; $i++) {
                for ($j = 0; $j < 3; $j++) {
                    $result[$i][$j] = 0;
                    for ($k = 0; $k < 3; $k++) {
                        $result[$i][$j] += $a[$i][$k] * $b[$k][$j];
                    }
                }
            }
            return $result;
        }

        $result = multiplyMatrix($a, $b);

        echo "<h3>Result:</h3>";
        echo "<table border='1'>";
        foreach ($result as $row) {
            echo "<tr>";
            foreach ($row as $value) {
                echo "<td>$value</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
    ?>
</body>

</html>
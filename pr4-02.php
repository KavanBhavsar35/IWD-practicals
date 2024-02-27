<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical 4-02</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 0 auto;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .fail {
            color: red;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <h1>GTU Result Calculator</h1>
    <?php

    $subjects = ['Subject1', 'Subject2', 'Subject3', 'Subject4'];

    echo "<form method='post'>";
    foreach ($subjects as $subject) {
        echo "<label for='$subject'>$subject marks (0-100):</label>";
        echo "<input type='number' id='$subject' name='$subject' min='0' max='100' required><br>";
    }
    echo "<button type='submit'>Calculate Result</button>";
    echo "</form>";

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $subject_grades = [];
        foreach ($subjects as $i => $subject) {
            $marks[$i] = (int) $_POST[$subject];

            if ($marks[$i] >= 85) {
                $grade = 'AA';
            } elseif ($marks[$i] >= 75) {
                $grade = 'AB';
            } elseif ($marks[$i] >= 65) {
                $grade = 'BB';
            } elseif ($marks[$i] >= 55) {
                $grade = 'BC';
            } elseif ($marks[$i] >= 45) {
                $grade = 'CC';
            } elseif ($marks[$i] >= 40) {
                $grade = 'CD';
            } elseif ($marks[$i] >= 35) {
                $grade = 'DD';
            } else {
                $grade = 'FF';
                echo "<p class='fail'>* FAIL in $subject! *</p>";
            }

            $subject_grades[$subject] = $grade;
        }

        echo "<table>";
        echo "<tr><th>Subject</th><th>Grade</th></tr>";
        foreach ($subject_grades as $subject => $grade) {
            echo "<tr><td>$subject</td><td>$grade</td></tr>";
        }
        echo "</table>";
    }

    ?>
</body>

</html>
<?php
function calculateNetPayment($basic_salary)
{
    $da = 0.5 * $basic_salary;
    $hra = 0.1 * $basic_salary;
    $medical = 0.04 * $basic_salary;

    $gross_salary = $basic_salary + $da + $hra + $medical;

    $insurance = 0.07 * $gross_salary;
    $pf = 0.05 * $gross_salary;

    $deduction = $insurance + $pf;

    $net_salary = $gross_salary - $deduction;

    return $net_salary;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical 3-02</title>
</head>

<body>
    <h1>Calculate Net Salary</h1>
    <form method="post">
        <label for="basic">Basic salary</label>
        <input type="number" name="basic" placeholder="Enter your basic salary" required><br>
        <input type="submit">
    </form>
</body>

</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo calculateNetPayment($_POST['basic']);
}
?>
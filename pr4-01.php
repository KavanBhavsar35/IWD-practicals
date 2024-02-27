<!DOCTYPE html>
<html>

<head>
    <title>Practical 4-01</title>
</head>
<style>
    h1 {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 10vh;
        margin: 0;
    }

    form {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 10vh;
        margin: 0;
    }
</style>

<body>
    <h1>Car Company Lookup</h1>
    <form method="post">
        <select name="carName" id="carSelector">
            <option value="0" selected>select brand</option>
            <option value="1">Safari</option>
            <option value="1">Nexon</option>
            <option value="1">Tiago</option>
            <option value="1">Tigor</option>
            <option value="2">XUV700</option>
            <option value="2">XUV300</option>
            <option value="2">Bolero</option>
            <option value="3">i20</option>
            <option value="3">Verna</option>
            <option value="3">Venue</option>
            <option value="3">Creta</option>
            <option value="4">Swift</option>
            <option value="4">Alto</option>
            <option value="4">Baleno</option>
            <option value="4">Brezza</option>
        </select>
        <input type="submit">
    </form>
    <?php
    $carCompanies = array(
        0 => "Please select value",
        1 => "Tata",
        2 => "Mahindra",
        3 => "Hyundai",
        4 => "Suzuki"
    );

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $carName = $_POST["carName"];
        echo "<h1>" . $carCompanies[$carName] . "</h1>";
    }
    ?>
</body>

</html>
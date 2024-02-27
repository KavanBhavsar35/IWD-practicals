<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical 2</title>
</head>

<body>
    <h1>User Registration Form</h1>
    <form method="post">
        <label for="fname">First name</label>
        <input type="text" name="fname" placeholder="Enter your first name" required><br>
        <label for="lname">Last name</label>
        <input type="text" name="lname" placeholder="Enter your last name" required><br>
        <label for="phnno">Phone number</label>
        <input type="number" name="phnno" placeholder="Enter your phone number" required><br>
        <label for="email">Email</label>
        <input type="email" name="email" placeholder="Enter your email id" required><br>
        <label for="gender">Gender</label>
        <label for="gender_male">
            <input type="radio" id="gender_male" name="gender" value="male" required>
            Male
        </label>
        <label for="gender_female">
            <input type="radio" id="gender_male" name="gender" value="female" required>
            Female
        </label>
        <label for="gender_other">
            <input type="radio" id="gender_male" name="gender" value="other" required>
            Other
        </label><br>
        <label for="dob">Date of birth</label>
        <input type="date" name="dob" required><br>
        <input type="submit">
    </form>
</body>

</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "First name : " . $_POST['fname'] . "<br>Last name : " . $_POST['lname'] . "<br>Phone no. : " . $_POST['phnno'] . "<br>Email : " . $_POST['email'] . "<br>Gender : " . $_POST['gender'] . "<br>Date of birth : " . $_POST['dob'];
}
?>
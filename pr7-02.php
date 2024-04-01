<?php
class MyClass
{
    public $email;
    public function __construct($email)
    {
        echo "Constructor called!<br>";
        $this->email = $email;
    }
    public function display()
    {
        echo "Your email id is $this->email<br>";
    }
    public function __destruct()
    {
        echo "Destructor called!<br>";
    }
}
if (isset($_POST['email'])) {
    $email = $_POST['email'];
    $obj1 = new MyClass($email);
    $obj1->display();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical 7-02</title>
</head>

<body>
    <form method="post">
        <label for="name">Email :</label>
        <input type="email" name="email" placeholder="Enter your email id" required><br>
        <input type="submit">
    </form>
</body>

</html>
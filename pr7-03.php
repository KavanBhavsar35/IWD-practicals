<?php
class MyClass
{
    private $name;
    private $age;

    public function setAttribute($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function getAttribute()
    {
        echo "Name : " . $this->name . "<br>Age : " . $this->age;
    }
}

$obj = new MyClass();
$obj->setAttribute('ABC', 123);
$obj->getAttribute();
?>
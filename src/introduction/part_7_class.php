<?php
class MyClass
{
    public $name;
    public $age;
    public function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }

    function toString(): string{
        return $this->name . " " . $this->age;
    }

}

$myObj = new MyClass("Juan", "Maria");
$getName = $myObj->name;
echo "Name ". $getName ." Age:". $myObj->age ."\n";
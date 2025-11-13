<?php
class Animal {
    public $name;
    protected $age;
    private $color;

    public function __construct($name, $age, $color) {
        $this->name = $name;
        $this->age = $age;
        $this->color = $color;
    }

    public function getName() {
        return $this->name;
    }

    //make the function public
    public function getAge() {
        return $this->age;
    }

    //make the function public
    public function getColor() {
        return $this->color;
    }
}

$animal = new Animal("Dog", 3, "Brown");

echo "name : " . $animal->name . "<br>";
echo "age : " . $animal->getAge() . "<br>";
echo "color : " . $animal->getColor() . "<br>";
?>

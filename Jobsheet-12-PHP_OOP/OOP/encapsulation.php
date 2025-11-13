<?php
class Car {
    private $model;
    private $color;

    public function __construct($model, $color) {
        $this->model = $model;
        $this->color = $color;
    }

    public function getModel() {
        return $this->model;
    }

    public function setColor($color) {
        $this->color = $color;
    }

    public function getColor() {
        return $this->color;
    }
}

$car = new Car("Toyota", "Blue");

echo "model : " . $car->getModel() . "<br>";
echo "color : " . $car->getColor() . "<br>";

$car->setColor("Red");

echo "updated color : "  . $car->getColor() . "<br>";
?>

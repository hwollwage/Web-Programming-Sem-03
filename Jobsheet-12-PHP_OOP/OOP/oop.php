<?php
class Car {
    public $brand;

    public function startEngine() {
        echo "engine started ";
    }
}

$car1 = new Car();
$car1->brand = "toyota ";

$car2 = new Car();
$car2->brand = "honda ";

$car1->startEngine();
echo "<br>" . $car2->brand;
?>
<?php
class Car {
    private $brand;

    public function __construct($brand) {
        echo "a new car is created <br>";
        $this->brand = $brand;
    }

    public function getBrand() {
        return $this->brand;
    }

    public function __destruct() {
        echo "the car is destroyed <br>";
    }
}

$car = new Car("Toyota");

echo "brand : " . $car->getBrand() . "<br>";
?>
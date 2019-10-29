<?php

require_once 'Class/Bicycle.php';
require_once 'Class/Car.php';
require_once 'Class/Truck.php';

$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);

$car = new Car('green', 4, 'electric');
echo $car->forward();
var_dump($car);

$truck = new Truck('blue', 4, 100, 'fuel' );

echo '<br>' . $truck->setFilling(1);
echo '<br>' . $truck->getFilling();
echo '<br>' . $truck->setFilling(100);
echo '<br>' . $truck->getFilling();
echo '<br>' . $truck->setFilling(152);
echo '<br>' . $truck->getFilling();
echo '<br>' . $truck->forward();
echo '<br>' . $truck->getCurrentSpeed();
echo '<br>' . $truck->brake();
echo '<br>' . $truck->getCurrentSpeed();

$truck1 = new Truck('black', 12, 500, 'fuel');
var_dump($truck1);
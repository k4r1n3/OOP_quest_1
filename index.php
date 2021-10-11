<?php

require_once 'bicycle.php';

$car = new Car('yellow', 14, 'weak');
$car->getCurrentSpeed = 300;

echo $car->start() . '<br>';
echo $car->forward() . '<br>';
echo 'Ta vitesse actuelle est de ' . $car->getCurrentSpeed . ' km/h' . '<br>';
echo $car->brake();

var_dump($car);

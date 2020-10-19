<?php
require_once 'bicycle.php';
require 'car.php';
require 'truck.php';


$truck = new Truck('black', 2, 'fuel', 3000);
$truck->setLoad(2000);

echo $truck->forward();

echo '<br> Vitesse du camion : ' . $truck->currentSpeed . ' km/h' . '<br>';
echo $truck->brake();
echo '<br> Vitesse du camion : ' . $truck->currentSpeed . ' km/h' . '<br>';
echo $truck->brake() . '<br>';
echo $truck->full();
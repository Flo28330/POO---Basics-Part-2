<?php

require 'Cars.php';
require 'Bicycle.php';
require 'Trucks.php';


$bike = new Bicycle("yellow", 2);
$bike->currentSpeed = 10;
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();


$misterPlow = new Cars("rouge", 2, 'diesel');
$misterPlow->currentSpeed = 50;
echo '<br><br><br>';
echo $misterPlow->start();
echo $misterPlow->forward();
echo '<br> Vitesse de la dépanneuse de M. Plow est de  ' . $misterPlow->currentSpeed . ' km/h' . '<br>';
echo $misterPlow->brake();
echo '<br> Vitesse de la dépanneuse : ' . $misterPlow->currentSpeed . ' km/h' . '<br>';
echo $misterPlow->brake();
var_dump($misterPlow);



$truck = new Trucks(150, 'black', 3, 'fuel');
$truck->currentSpeed = 100;
echo '<br><br><br>';
echo $truck->forward();
echo '<br> la vitesse du camion est de ' .$truck->currentSpeed. ' km/h' . '<br>';
echo $truck->brake();
echo '<br> la vitesse du camion est de ' . $truck->currentSpeed . ' km/h' . '<br>';
echo $truck->brake();
echo $truck->content();
var_dump($truck);

<?php

require_once 'Vehicle.php' ;
require_once 'Bicycle.php' ;
require_once 'Car.php' ;
require_once 'Truck.php' ;


// $vehicule = new Vehicle ("rose", 4) ;
// var_dump($vehicule) ;

$bicycle = new Bicycle("violet", 2);
echo $bicycle->forward() . "<br>";
var_dump($bicycle) ;

$car = new Car('green', 4, 'fuel');
echo $car->forward();
var_dump($car);
//$car->setEnergy('fuel');
//var_dump($car);

var_dump(Car::ALLOWED_ENERGIES);

// Truck ********************
$myTruck = new Truck('grey', 3, 'fuel', 38000);
var_dump($myTruck) ;

// $myTruck->setStorageCapacity(20000) ;
// echo $myTruck->getStorageCapacity() . "<br>"  ;

$myTruck->setLoading(5000) ;
echo $myTruck->getLoading() . "<br>"  ;
echo $myTruck->controlTheLoad() . "<br>"  ;

$myTruck->setLoading(38001) ;
echo $myTruck->getLoading() . "<br>"  ;
echo $myTruck->controlTheLoad() . "<br>"  ;


echo $myTruck->forward()  . "<br>" ;
echo $myTruck->getCurrentSpeed()  . "<br>" ;
echo $myTruck->brake()  . "<br>" ;
echo $myTruck->getCurrentSpeed() . "<br>"  ;



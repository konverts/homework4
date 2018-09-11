<?php

error_reporting(-1);
require_once 'classes/IProduct.php';
require_once 'classes/Product.php';
require_once 'classes/TGps.php';
require_once 'classes/TDriver.php';
require_once 'classes/Day.php';
require_once 'classes/Hours.php';
require_once 'classes/Standard.php';
require_once 'classes/Students.php';

//$day = new Day(20, 1, 100);
//$day->gpsOn();
//$day->driverOn();
//echo $day->getResult();

//$standard = new Standard(20, 10, 200);
//echo $standard->getResult();
$hours = new Hours(20, 10, 200);
echo $hours->getResult();

//$students = new Students(21, 10, 200);
//echo $students->getResult();
?>
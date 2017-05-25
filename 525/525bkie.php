<?php
class Bike{

    var $speed=0;
    function upSpeed(){

    }
    function downSpeed(){

    }



}

$myBike=new Bike;
$urBike=new Bike;

$myBike->speed=10;
$urBike->speed=20;

echo $myBike->speed.'<br>';
echo $myBike->speed.'<br>';
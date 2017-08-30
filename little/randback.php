<?php
include 'on1num.php';
$poker = range(1,861);

shuffle($poker);

foreach ($poker as $i => $value){
    $player[$i%4][(int)($i/4)] = $value;
}
//echo  $value;
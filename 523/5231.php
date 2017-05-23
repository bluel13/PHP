<?php
$poker = range(0,51);

shuffle($poker);

foreach($poker as $card){

    echo $card.'<br>';
}

echo  '<hr>';

foreach ($poker as $i =>$value){

  $player[$i%4][?]= $value;

}








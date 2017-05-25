<?php

if (!isset($_GET['rate'])) exit(0);
$rate=$_GET['rate'];

//1
$img=imagecreate(400 ,100);
;

//2
$yellow=imagecolorallocate($img,255,255,0);
$red=imagecolorallocate($img,255,0,0);
imagefilledrectangle($img,0,0,500,800,$red);
imagefilledrectangle($img,(int)($rate*400/100),800,0,0,$yellow);

//3
header('content-Type:image/jpeg');
imagejpeg($img);


//4
imagedestroy($img);






<?php
$img=imagecreatefromjpeg("../upload/lich.jpg");//最前面為兩點是因upload在此php檔位置的另一個資料夾，
//
$red=imagecolorallocate($img,225,0,0);
imagettftext($img,36,0,500,500,$red,"../upload/fireflysung.ttf"
,為);


//3
header('content-Type:image/jpeg');
imagejpeg($img);


//4
imagedestroy($img);


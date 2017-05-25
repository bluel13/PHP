<?php //圖片自動符合大小


$imgSrc = imagecreatefrompng(  //imagecreatefrom'png'依照圖片格式更改字元
    "../upload/book.png");
//$square=500;
$imgDst = imagecreate(250, 250);
$imgSW = imagesx($imgSrc);
$imgSH = imagesy($imgSrc);
if ($imgSW>$imgSH){
    $imgDW = 200;
    $imgDH = $imgSH * 200 / $imgSW;
}else{
    $imgDH = 200;
    $imgDW = $imgSW * 200 / $imgSH;
}
imagecopyresized (
    $imgDst , $imgSrc,
    0 , 0,
    0, 0,
    $imgDW , $imgDH ,
    $imgSW , $imgSH );
// 3
header('Content-Type: image/png');
imagejpeg($imgDst);
// 4
imagedestroy ( $imgSrc );
imagedestroy ( $imgDst );
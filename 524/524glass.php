<?php
//$fp=opendir('d:/test1');
// if($fp){
//
// echo 'OK';
//
// }else {
//     echo 'hu';
//
//}
//
//$p=realpath('./..');
// echo $p;


$fp=opendir(".");
while($file = readdir($fp)){
    echo "{$file}<br>";

}
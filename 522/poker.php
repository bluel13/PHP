<?php

$poker=array();

for ($i=0;$i<10;$i++){


do {
    $temp=rand (0,9);
    $isRepeat = false;
    for ($j = 0; $j < $i; $j++) {
        if ($poker[$j] == $temp) {
            $isRepeat = true;
            break;
        }
    }
}while($isRepeat);
if($isRepeat){
       $i--;
       continue;
} else{
    $poker[]=$temp;
}
echo $poker[$i].'<br>';

}








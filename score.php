<?php
$Score=rand(0,100);
echo $Score.'<br>';
if($Score>=90){
    echo'A';
}else if ($Score >= 80) {
        echo 'B';
    } else if ($Score >= 70) {
            echo 'C';
        } else if ($Score >= 60) {
                echo 'D';
            } else { echo 'E';}

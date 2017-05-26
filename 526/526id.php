<?php
 include '526api.php';

 if(isRightTWID('A123456789')==1){

     $myID= new TWID('A123456789');
     echo $myID->getGender()?'Male':'Female';
 }else{
     echo 'xx';
 }
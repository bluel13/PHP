<?php
$upload = $_FILES['upload'];
 if ($upload['error']==0) {
     if (copy(
         $upload['temp_name'],
         "./upload/{$_FILES['name']}")) {
         echo 'Upload OK';
     } else {
         echo 'Copy Fail';
     }

 }else{
     echo'Upload Fail';

 }
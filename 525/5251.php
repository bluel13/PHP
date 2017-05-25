<?php
$fp=fopen('./Test.txt','r');
  while($line = fgets($fp)){
      $len=strlen($line);
      echo"{$line}<br>";

  }
  fclose($fp);
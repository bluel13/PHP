<?php
//$account= $_GET["account"];
//$account= $_POST["account"];
$account= $_REQUEST["account"];
$password= $_REQUEST["password"];
$birthday= $_REQUEST["birthday"];
$area= $_REQUEST["area"];
$gender= $_REQUEST["gender"];
$like= $_REQUEST["like"];

echo $account.'<br>';
echo $password.'<br>';
echo $birthday.'<br>';
echo $area.'<br>';
echo $gender.'<br>';
//echo $like.'<br>';
foreach ($like as $v){
    echo $v.'<br>';
}
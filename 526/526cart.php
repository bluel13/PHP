<?php
include '526api.php';
session_start();

$memberObj=new Member('A12345789');
$cartObj=new Cart($memberObj);


$_SESSION['cart']=$cartObj;



$cartObj->addItem('P001',rand(1,10));
$cartObj->addItem('P005',rand(1,10));

$list=$cartObj->getList();

foreach($list as $pid=>$qty){
    echo "{$pid}:{$qty}<br>";
}
?>
<hr>
<a href="526logout.php">Next</a>


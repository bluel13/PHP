<?php
 include'526api.php';
 session_start();

 if(!isset($_SESSION['cart']))
 header('Location:526cart.php');

 $cartObj=$_SESSION['cart'];
 $list= $cartObj->getList();
 foreach($list as $pid =>$qty){
     echo "{$pid}:{$qty}<br>";
 }
?>
<hr>
<a href="logout.php">Logout</a>
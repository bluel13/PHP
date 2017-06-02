<?php
include'sql602.php';
$pdo = new pdo($dsn, $user, $passwd, $opt);

if(!isset($_REQUEST['account']))
//    echo "xx";
//}else {
//    echo "x2";
//}

    header("Location:addmember.php");
$account = $_REQUEST['account'];
$passwd =password_hash($_REQUEST['passwd'], PASSWORD_DEFAULT);
$rname = $_REQUEST['rname'];
$sql = "INSERT INTO member (account,passwd,rname) VALUES (?,?,?)";
$stmt = $pdo->prepare($sql);
$stmt ->execute([$account,$passwd,$rname]);
header("Location:602login.php");




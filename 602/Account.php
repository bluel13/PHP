<?php
include "sql602.php";
session_start();
$pdo = new pdo($dsn, $user, $passwd, $opt);
if (!isset($_REQUEST['account']))
    header("Location: 602login.php");
$account = $_REQUEST['account'];
$passwd = $_REQUEST['passwd'];
$sql = "SELECT * FROM member WHERE account = ?";
$stmt = $pdo->prepare($sql);    // statement SQL
$stmt->execute([$account]);
if ($stmt->rowCount()>0){
    $memberObj = $stmt->fetchObject();
    $dbPasswd = $memberObj->passwd;
    if (password_verify($passwd, $dbPasswd)){
        // OK
        $_SESSION['member'] = $memberObj;
        header("Location: mainv2.php");
    }else{
        // passwd not match
        header("Location: 602login.php");
    }
}else{
    // account not exist
    header("Location: 602login.php");
}
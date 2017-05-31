<?php
//1. 連接到SQL伺服端
//$coon=@mysqli_connect("127.0.0.1","root",
//    "root","ioi") or die("Sever Bust");
//if($conn) echo 'OK';
$link = mysql_connect('localhost', 'root', 'root');
$db = @new mysqli('127.0.0.1','root','root','ioi');


echo $db->error;

//3.query
//$sql = 'insert into member(account,passwd,realname) values("Falme","2256998","GTYU")';

$sq1='select * from member';

$result = $db->query ($sql);

//echo var_dump($result);
$row = $result->fetch_object();
echo $row->id.'<br>';
echo $row->account.'<br>';
echo $row->passwd.'<br>';







<!doctype html>
<html>
<head>
    <meta charset = "utf-8">
</head>
<body>
<?php
include 'randback.php';
$mysqli = new mysqli("127.0.0.1","root","root","small1");
if ($mysqli ->connect_errno) die ("Fate".$mysqli->connect_error);

//if($_POST["x1"] = rand("x1")){
//    echo "000";
//    $city = $_POST["x1"];
//
//}else{
//    echo"xx";
//}

$mysqli->query("SET NAMES utf8");
$result = $mysqli->query("SELECT * FROM train WHERE id LIKE '$value'");

echo "<table style='border:3px #6E6EFF solid;' border ='2%' align = 'center'  >";

while($field = $result->fetch_field())
    echo "<td>", $field->name."</td>";
echo "</tr>";

while($row = $result->fetch_row()){
    echo "<tr>";
    for($i =0; $i <$result->field_count;$i++)
        echo"<td>".$row[$i]."</td>";
    echo "</td>";
}
echo"</table>";

$result->free();
$mysqli->close();
?>

<form>
    <body bgcolor = "#FFE8BF">
    <div style="width:400px;line-height:150px;margin:0px auto">
    <input type="button" value="Want Change?" onclick="location.href='randomgo.php'";
           style="width:250px;height:50px;font-size:30px; position:absolute; left:825px; top:150px; "><br>
<!--    <a href="randomgo.php" style = "text-decoration: none;"><h1>Want Change?</h1></a>-->
    </div>
</form>

</body>
</html>



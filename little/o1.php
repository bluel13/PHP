<!doctype html>
<html>
<head>
    <meta charset = "utf-8">
</head>
<body>
<?php
$mysqli = new mysqli("127.0.0.1","root","root","small1");
if ($mysqli ->connect_errno) die ("Fate".$mysqli->connect_error);

if($_POST["city"]!=""){
    echo "Result:";
    echo "<hr>";
    $city = $_POST["city"];

}else{
    echo"xx";
}


$mysqli->query("SET NAMES utf8");
$result = $mysqli->query("SELECT * FROM train WHERE Location LIKE'$city%'");

echo "<table border ='1' align = 'cemter'><tr align ='center'>";


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

</form>




</body>
</html>



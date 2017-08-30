<?php
include 'logindata.php';
session_start();
if (!isset($_SESSION['member'])) header("Location: login.php");
$memberObj = $_SESSION['member'];
$pdo = new pdo($dsn, $user, $passwd, $opt);
$sql = "select * from train where Location like '%臺北'" ; echo"000";

$stmt = $pdo->prepare($sql);
$stmt->execute();
?>

<!--<html>-->
<!--<head>-->
<!--  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />-->
<!--    <title>test</title>-->
<!--</head>-->
<!---->

<!--<form id="form1" name="form1" method="post" action="">-->
<!--    本頁搜尋-->
<!--    <script>-->
<!--        function func(form){-->
<!--            var obj=form;-->
<!--            if (obj.value=="請在此輸入查詢"){-->
<!--                obj.value=""-->
<!--            } }-->
<!--    </script>-->
<!--    <input name="keyword" type="text" id="keyword" AutoComplete="Off" onfocus="func(this)" value="請在此輸入查詢" size="50" />-->
<!--    	<input name="button" type="submit" id="button" value="搜尋" />-->

<!--<table>-->
<!--        <tr>-->
<!--            <th>Where You Want To Go?</th>-->
<!--            <td><input type="text" name="class" value=" 00"</td>-->
<!--            <td><input type="submit" name="button" value="搜尋" ></td>-->
<!--        </tr>-->
<!--    </table>-->
<!--</form>-->
Hello, <?php echo $memberObj->realname; ?>
<hr>
<table border="1" width="100%">
    <tr>

        <th>Class</th>
        <th>Building</th>
        <th>Location</th>
        <th>Address</th>
        <th>BuildTime</th>
    </tr>
    <?php
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

    while ($row = $stmt->fetchObject()){
        echo '<tr>';
//        echo "<td>{$row->idi}</td>";
        echo "<td>{$row->Class}</td>";
        echo "<td>{$row->Building}</td>";
        echo "<td>{$row->Location}</td>";
        echo "<td>{$row->Address}</td>";
        echo "<td>{$row->BuildTime}</td>";
        echo '</tr>';
    }

    ?>
</table>
<hr>
<a href="logout.php">Logout</a>


</html>
<?php
date_default_timezone_set("ASIA/Taipei");
$dirname=".";
      if(isset($_GET['dirname'])){
   $dirname=$_GET['dirname'];
   if(isset($_GET['filename'])){
       $delfile=$_GET['filename'];
       unlink("{$dirname}/{delfile}");
   }
      }
  ?>
<form action="524up.php" method="post"  enctype="multipart/for-data">
    <input type="file" name="upload"/>
    <input type="submit" name="Send" value="Upload"/>
</form>


<form>
  <input type="text" name="dirname"/><br>
    <input type="submit" name="btn" value="Chick"/><br>
</form>
<hr>
<table border="1" width="100%">
    <tr>
        <th>FileName</th>
        <th>Type</th>
        <th>Size</th>
        <th>mtime</th>
        <th>Delete</th>
        <th>Upload</th>
    </tr>
<?php
$fp=opendir($dirname);
while($file = readdir($fp)){
    echo '<tr>';
    echo "<td>{$file}</td>";
    $type='';
    if (is_dir("{$dirname}/{$file}")){
        $type='Dir';
    }else if(is_file("{$dirname}/{$file}")){
        $type='File';
    }
    echo "<td>{$type}</td>";
    echo "<td>".filesize("{$dirname}/{$file}")."</td>";
    echo "<td>" .date('Y-m-d H:i:s',filemtime("{$dirname}/{$file}"))."</td>";
    echo "<td><a href='?defile={dirname={$file}' onclick=\"return confim('Del ?')\"> Delete</a ></td >";
    echo "<td></td>";
echo'</tr>';
}


?>
</table>

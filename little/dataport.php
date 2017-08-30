<!--echo'<meta http-equiv="Content-Type" content="text/html; charset=utf-8">';-->
<!--echo '<b>這裡是粗體字</b><br>';-->
<!--echo'<a href ="https://www.dropbox.com/s/he6z15r0xtxvwof/eat2.xlsx?dl=0">這裡是超連結</a>';-->
<?php
include 'sup.php';
$pdo = new pdo($dsn, $user, $passwd, $opt);
$sql = "insert into train (Class,Building,Location,Address,BuildTime) values (?,?,?,?,?)";
$json = file_get_contents(
    "https://cloud.culture.tw/frontsite/trans/emapOpenDataAction.do?method=exportEmapJson&typeId=A&classifyId=1.2");
$root = json_decode($json);
foreach ($root as $row){
//    $idi = $row->id;
    $Class = $row->groupTypeName;
    $Building = $row->name;
    $Location = $row->cityName;
    $Address = $row->address;
    $BuildTime= $row->buildingCreateWestYear;
    $pdo->prepare($sql)->execute([$Class,$Building,$Location,$Address,$BuildTime]);
}
<?php
include 'sql2.php';
$pdo = new pdo($dsn, $user, $passwd, $opt);
$sql = "insert into food (fid,fname,tel,addr,memo) values (?,?,?,?,?)";
$json = file_get_contents(
    "http://data.coa.gov.tw/Service/OpenData/ODwsv/ODwsvTravelFood.aspx");
$root = json_decode($json);
foreach ($root as $row){
    $fid = $row->ID;
    $fname = $row->Name;
    $tel = $row->Tel;
    $addr = $row->Address;
    $memo = $row->HostWords;
    $pdo->prepare($sql)->execute([$fid,$fname,$tel,$addr,$memo]);
}


//    echo "{$row->number}:{$row->name}<br>"; //注意開放資料內的開頭文字 (ex:number&name是隨命名而變


//$json = '{
//            "id":"123",
//            "name": "brad",
//            "lang": [
//                {"name":"Java",
//                 "level": "1"
//                },
//                {"name":"PHP",
//                 "level": "2"
//                },
//                {"name":"Android",
//                 "level": "3"
//                },
//                {"name":"iOS",
//                 "level": "4"
//                }
//            ]}';
//$root=json_decode($json);
//foreach ($root as $row) {
//    echo "{$row->id}:{$row->name}<br>";
//
//}
//

//echo var_dump($root);



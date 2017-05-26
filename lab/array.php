<?php
$a=array(
"Bvvv"=>"5dfghj5",'dd'=>"31","ssa"=>"9"
);
var_dump($a);

//array() 陣列函數
//儲存多個數值 能與key&value搭配
//中文的 bytes 數量:


//var_dump()

?>
<!---------------------------->

<?php
$fp=@fopen('./Test.txt','r');
  while($line = fgets($fp)){
      $len=strlen($line);
      echo"{$len}:{$line}<br>";

  }
  fclose($fp);

//strlen() 取得字串長度,回傳字串的長度
//fopen:用來開啟文件或URL內容。
//feof:檢測文件到最後一行，會輸出文件的所有內容。
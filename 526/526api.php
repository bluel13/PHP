<?php
class Cart{    //購物車
    private $member;
    private $list;
function __construct($member){
    $this->list=array();
    $this->member = $member;
}
function addItem($pid,$qty){
    $this->list[$pid] = $qty;
}
function removeItem($pid){
    unset($this->list[$pid]);
}
function getList(){
    return $this->list;
}
    function getMember(){
        return $this->member;
  }
}

class Member{   //會員
    var $twid;
function __construct($twid){
$this->twid = new TWID($twid);
}
}






class TWID {
    private $id;
    static $counter = 0;
    function __construct($id){
        $this->id = $id;
        TWID::$counter++;
    }
    function getTWID(){return $this->id;}
    function getGender(){
        return true;
    }
    function getArea(){
        return '台中市';
    }
    static public function checkId($twid){
        $ret = 0;   // 格式錯誤
        if (preg_match('/^[A-Z][12][0-9]{8}$/', $twid)>0){
            $n12s = substr($twid, 0, 1);
            //echo $n12s;
            $letters = 'ABCDEFGHJKLMNPQRSTUVXYWZIO';
            $n12 = strpos($letters, $n12s) + 10;
            $n1 = (int)($n12 / 10);
            $n2 = $n12 % 10;
            $n3 = substr($twid, 1, 1);
            $n4 = substr($twid, 2, 1);
            $n5 = substr($twid, 3, 1);
            $n6 = substr($twid, 4, 1);
            $n7 = substr($twid, 5, 1);
            $n8 = substr($twid, 6, 1);
            $n9 = substr($twid, 7, 1);
            $n10 = substr($twid, 8, 1);
            $n11 = substr($twid, 9, 1);
            $sum = $n1*1 + $n2*9 + $n3*8 + $n4*7 + $n5*6 +
                $n6*5 + $n7*4 + $n8*3 + $n9*2 + $n10*1 + $n11*1;
            if ($sum %10 == 0){
                $ret = 1;   // OK
            }else{
                $ret =-1;   // 檢查碼沒過
            }
        }
        return $ret;
    }
}
?>
<!---->
<!--    <form>-->
<!---->
<!--        <input type="text" name="twid" value="--><?php //echo $twid ?>
<!--//<!--        <input type="submit" value="check" />--><?php ////echo $n12 ?>
<!---->
<!--    </form>-->


<!--//class Bike {-->
<!--//    private $speed = 0;-->
<!--//    function upSpeed(){-->
<!--//    $this->speed =-->
<!--//        ($this->speed<1)?1:$this->speed*1.2;-->
<!--//    }-->
<!--//    function downSpeed(){-->
<!--//        $this->speed =-->
<!--//            ($this->speed<1)?1:$this->speed*0.7;-->
<!--//    }-->
<!--//    function getSpeed()-->
<!--//    {-->
<!--//        return $this->speed;-->
<!--//-->
<!--//    }-->
<!--//}-->
<!--//-->
<!--//-->
<!--//class Scooter extends Bike{-->
<!--//    function __construct(){-->
<!--//        echo 'V2';-->
<!--//    }-->
<!--//-->
<!--//-->
<!--//    function downSpeed($gear=1){-->
<!--//    parent::upspeed($gear);-->
<!--//      $this->speed*=2;-->
<!--//    }-->
<!--//}-->

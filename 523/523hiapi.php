<?php
function fx($x){
    $ret=2*$x+1;
    return $ret;

}

function sayYa($who,$pre){
    echo"{$pre},{$who}<br>";
}

function sayHello(){
    $names= func_get_args();
    foreach($names as $name){
        echo "Hello,{$name}<br>";
    }

}
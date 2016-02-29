<?php
function price($name){
    $details=array("abc"=>10,"xyz"=>20);
    foreach ($details as $n=>$p){
        if ($name == $n) {
            $price = $p;
        }
    }
    return $price;
}
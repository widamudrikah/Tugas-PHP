<?php

$a = 87;
$b = $a % 9;

if($b == 0){
    echo "$a adalah bilangan genap";
}elseif($b == 1){
    echo "$a adalah bilangan ganjil";
}elseif($b > 1){
    echo "$a ga tau apa apa";
}
?>
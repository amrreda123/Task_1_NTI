<?php

function ArraySec($array1, $array2) {
    $results = [];
    foreach($array1 as $val1){
        foreach($array2 as $val2){
            if($val1 === $val2){
                $results[] = $val2;
            }
        }
    }
    foreach($results as $result){
        echo $result . " ";
    }
}

$arr1=array('a','b','c','d');
$arr2=array('c','d','e','f');
echo "Output: <br>";
ArraySec($arr1, $arr2);

?>
<?php

function MaxA($arr) {
    $max = $arr[0];
    for ($i = 1; $i < count($arr); $i++) {
        if($arr[$i] > $max) $max = $arr[$i];
    }
    
    return $max;
}

$tests=array(5,4,9,3,1,7,5,8,6);

echo MaxA($tests);

?>
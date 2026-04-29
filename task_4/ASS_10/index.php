<?php

function sortMyArray($arr) {
    sort($arr);
    
    foreach ($arr as $num) {
        echo $num . " ";
    }
}

$tests = array(6, 4, 9, 3, 12, 8, 7);

echo "Output: <br>";
sortMyArray($tests);

?>
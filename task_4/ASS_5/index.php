<?php

function RouteBubble($arr) {
    $n = count($arr);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($arr[$j] > $arr[$j+1]) {
                $temp = $arr[$j];
                $arr[$j] = $arr[$j+1];
                $arr[$j+1] = $temp;
            }
        }
    }
    
    return $arr;
}

$testArray = [5, 4, 9, 3, 1, 7, 5, 8, 6];
$result = RouteBubble($testArray);

echo "Sorted Array: <br>";
foreach($result as $re){
    echo $re ." " ;
}

?>

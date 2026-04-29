<?php

function Calo($nums) {
    $sum = 0;
    foreach($nums as $num){
        $sum += $num;
    }
    return $sum;
}

echo "Total Sum: " . Calo([10, 20, 30]);
?>
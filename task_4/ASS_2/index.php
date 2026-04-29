<?php

function Calo($num1, $num2) {
    $product = $num1 * $num2;
    $difference = $num1 - $num2;
    $division = $num1 / $num2;

    echo "Product: " . $product . "<br>";
    echo "Difference: " . $difference . "<br>";
    echo "Division: " . $division . "<br>";
}

Calo(20, 40);
?>
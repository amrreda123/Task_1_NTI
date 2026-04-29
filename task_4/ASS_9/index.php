<?php
function displayWithFor($arrs) {
    $length = count($arrs);
    for ($i = 0; $i < $length; $i++) {
        $item = $arrs[$i];

        if (is_bool($item)) {
            echo ($item === true) ? "Yes " : "No ";
        } else {
            echo $item . " ";
        }
    }
}

$tests = array(1, "tariq", 1.5, true, 7, 's', false);
echo "Using For Loop: <br>";
displayWithFor($tests);
echo "<br>---------------------------------<br>";
function displayWithWhile($arrs) {
    $length = count($arrs);
    $i = 0;

    while ($i < $length) {
        $item = $arrs[$i];

        if (is_bool($item)) {
            echo ($item ? "Yes " : "No ");
        } else {
            echo $item . " ";
        }

        $i++;
    }
}

echo "<br>Using While Loop: <br>";
displayWithWhile($tests);
?>
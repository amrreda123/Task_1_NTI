<?php

function search($films, $keyword) {
    $result = "no";
    foreach($films as $film) {
        if ($film === $keyword) {
            $result = "yes";
            break;
        }
    }
    return $result;
}

// تجربة الكود
$filmsList = ["Fast", "Predestination", "Persuit", "Prestige"];
echo search($filmsList, "avatar");
echo "<br>";
echo search($filmsList, "Fast");
?>
<?php

function countOccurrences($films, $keyword) {
    $result = 0;
    foreach($films as $film) {
        if ($film === $keyword) {
            ++$result;
        }
    }
    if($result === 0) return "NOTFOUND";
    return $result;
}

$films=array("avatar","Prestige","avatar","Prestige");
echo countOccurrences($films, "avatar");
echo "<br>";
echo countOccurrences($films, "Fast");
?>
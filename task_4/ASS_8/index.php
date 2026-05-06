<?php

function RouteRandomPass($length) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    $password = "";
    $charsLength = strlen($chars);

    for ($i = 0; $i < $length; $i++) {
        $randomIndex = rand(0, $charsLength - 1);
        $password .= $chars[$randomIndex];
    }

    return $password;
}

echo "Random Password (8 chars): " . RouteRandomPass(8);
echo "<br>";
echo "Random Password (12 chars): " . RouteRandomPass(12);

?>
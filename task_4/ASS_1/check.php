<?php
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(isset($_POST['submit'])){
        $age = $_POST['age'];
        echo ($age > 18 ) ? "agine" : "Not";
    }
}
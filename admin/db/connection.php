<?php
    $host = 'localhost';
    $user = 'hachikouser';
    $passward = 'hachikopass';
    $database = 'hachiko';
    global $mysqli; 
    $mysqli = new mysqli ($host,$user,$passward,$database);

    if($mysqli->connect_errno){
        echo "failed to connect to MySql: ".$mysqli->connect_error;
        die;
    }


?>
<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $database = "pet";

    $con = new mysqli($server, $user, $password, $database);
    
    if(!$con){
        die(mysqli_error($con));
    }

?>
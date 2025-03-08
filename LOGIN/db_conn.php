<?php 

    $sname = "localhost";
    $user = "root";
    $password = "";

    $db_name = "test_db";

    $conn = mysqli_connect($sname, $user, $password, $db_name);

    if(!$conn){
        echo "Connection failed!";
    }
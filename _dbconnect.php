<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "day_21_assignment";

    $conn = mysqli_connect($server,$username,$password,$database);
    if(!$conn){
        die("Error".mysqli_connect_error());
    }
    // else{
    //     echo "this connection has been established.";
    // }
?>
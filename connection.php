<?php 
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $db_name = "db2"; 
    $port = 4306; 
    $conn = new mysqli($servername, $username, $password, $db_name, $port);
    if($conn->connect_error){
        die("Connection failed".$conn->connect_error);
    }
    echo " ";
    
    ?>
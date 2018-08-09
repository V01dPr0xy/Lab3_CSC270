<?php
    //connection variables
    $host = "localhost";
    $username = "root";
    $password = "";
    $db_name = "<insertname>_db";

    //connect to the database
    $mysqli = new mysqli($host, $username, $password, $db_name);

    //check for any errors that may have occurred
    if(mysqli_connect_errno())
    {
        echo "Error: Could not connect to the database";
        exit;
    }
?>
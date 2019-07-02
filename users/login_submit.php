<?php
    //Include file to read from the database
    include "/../dbconfig.php";
    //check for credentials - $_POST must be used instead of $_GET, as it is unsafe

    //Query to be executed
    $query = "Select id, username, password, isadmin
            From `users`
            Where username = '".$mysqli->real_escape_string($_POST['username'])."'
            AND password = '".$mysqli->real_escape_string($_POST['password'])."'
            limit 0,1";

    //execute the query
    $result = $mysqli->query($query);

    if($result->num_rows == 1)
    {
        //If both succeeds  
        $kollectiv = $result->fetch_assoc();

        if(session_status() == PHP_SESSION_NONE)
        {
            session_start();
        }
        else
        {
            echo "Session start failed";
        }

        $_SESSION['current_username'] = $_POST['username'];
        $keys = array_keys($kollectiv);
        $_SESSION['admin_access'] = $kollectiv[$keys[3]];
        $_SESSION['logged_in'] = 1;
        //Direct the user to the home/index page
        header("Location: ../home/lab3_index.php");
        // header("Location: ../../backend/crud-operation/load_page.php");
        exit;  
    }
    else
    {
        include "login.php";
        echo "Incorrect username and/or password.";
        exit;
        //If the password fails, but the username succeeds -> reload the login page with an error message
    }

    //echo an hmtl file here - it's only boilerplate code
    //echo "<!DOCTYPE html>
    //         <html>
    //             <head>
    //             </head>
    //             <body>
    //             </body>
    //         </html>";
?>
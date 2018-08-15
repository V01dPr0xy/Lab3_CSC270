<?php
    //Include file to read from the database
    include "/../dbconfig.php";
    //check for credentials - $_POST must be used instead of $_GET, as it is unsafe

    //Query to be executed
    $query = "Select id, username, password, isadmin
            From `users`
            Where username = '".$mysqli->real_escape_string($_POST['username'])."'
            limit 0,1";

    //execute the query
    $result = $mysqli->query($query);

    if($result->num_rows == 1)
    {
        if($_POST['password'] == $password)
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
            //Direct the user to the home/index page
            header("Location: ../index.php");
            // header("Location: ../../backend/crud-operation/load_page.php");
            exit;
        }
        else
        {
            include "/../users/login.php";
            echo "Password failed";
            exit;
            //If the password fails, but the username succeeds -> reload the login page with an error message
        }
    }
    else
    {
        //If the username fails -> reload the login page with an error message
        echo "Username does not exist, or is misspelled.";
        include "/../users/login.php";
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
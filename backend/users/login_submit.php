<?php
    //Include file to read from the database
    include "../dbconfig.php";
    //check for credentials - $_POST must be used instead of $_GET, as it is unsafe

    //Query to be executed
    $query = "Select username, password 
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
            session_start();
            $_SESSION['current_username'] = $_POST['username'];

            header("Location: ../../frontend/lab3_index.php");
        }
        else
        {
            echo "Password failed";
            //If the password fails, but the username succeeds
        }
    }
    else
    {
        //If the username fails
        echo "Username does not exist, or is misspelled.";
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
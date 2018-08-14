<?php
    //Include file to read from the database
    include __DIR__ . "/../dbconfig.php";
    //check for credentials - $_POST must be used instead of $_GET, as it is unsafe

    //Query to be executed
    $query = "Select username, password 
            From `users`
            Where username = '".$mysqli->real_escape_string($_POST['username'])."'";

    //execute the query
    $result = $mysqli->query($query);

    $count = $mysqli->query("Select * from `users`");

    if($result->num_rows == 0)
    {
        if($_POST['password'] == $_POST['password_confirm'])
        {
            //If both succeeds, create a user in the database
            $query = "insert into users
                set
                ID = ".($count->num_rows + 1).",
                username = '".$mysqli->real_escape_string($_POST['username'])."',
                password = '".$mysqli->real_escape_string($_POST['password'])."',
                isadmin = 0";    

            //If both succeeds  
            session_start();
            $_SESSION['current_username'] = $_POST['username'];
            $_SESSION['admin_access'] = 0;       

            if( $mysqli->query($query) ) {
                //if saving success
                header("Location: ../../frontend/lab3_index.php");
            }

            //Direct the user to the home/index page
        }
        else
        {
            echo "Passwords do not match";
            include __DIR__ . "/../../frontend/users/register.php";
            exit();
            //If the password fails, but the username succeeds -> reload the login page with an error message
        }
    }
    else
    {
        //If the username fails -> reload the login page with an error message
        echo "Username already exists; please choose a different one";
        include __DIR__ . "/../../frontend/users/register.php";
    }

    $result->free();
    $count->free();
    $mysqli->close();
?>
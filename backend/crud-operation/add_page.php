<?php
//include database connection
include 'dbconfig.php';
//$mysqli->real_escape_string() function helps us prevent attacks such as SQL injection
$query = "insert into pages
    set
    Page = 'What should the page say?',
    Name = 'New Page Ready To Edit'";

//execute the query
if( $mysqli->query($query) ) {
    //if saving success
    header("Location: index.php"); /* Redirect browser, MUST occur before anything is output to page */
    exit();
}else{
    //if unable to create new record
    echo "Database Error: Unable to create record.";
}
//close database connection
$mysqli->close();
?>

<?php
//include database connection
include 'dbconfig.php';
//$mysqli->real_escape_string() function helps us prevent attacks such as SQL injection
$query = "update pages 
set
Name = '".$mysqli->real_escape_string($_POST['PageName'])."',
Page = '<p>".$mysqli->real_escape_string($_POST['PageText'])."</p>''
Header_ID = '".$mysqli->real_escape_string($_POST['HeaderId'])."'
where ID ='".$mysqli->real_escape_string($_POST['id'])."'";
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

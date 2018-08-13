<?php include 'header.php'; ?>

<?php 
//include database connection
include '../dbconfig.php';

//select the specific database record to update
$query = "select *
from pages
where id='".$mysqli->real_escape_string($_REQUEST['id'])."'
limit 0,1";

//execute the query
$result = $mysqli->query( $query );

//get the result
$row = $result->fetch_assoc();

//assign the result to certain variable so our html form will be filled up with values
$page = $row['Page'];
$name = $row['Name'];
$id = $row['ID'];
$page= str_replace("\n","</br>",$page);
echo $page;

//disconnect from database
$result->free();
$mysqli->close();
?>

<?php include 'footer.php'; ?>
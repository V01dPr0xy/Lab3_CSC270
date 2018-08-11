<?php include 'header.php'; ?>

<?php 
include 'PageList.php';
//include database connection
include 'dbconfig.php';

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


echo "<form action='DeletePage.php' method='delete'>";
echo "<input type='hidden' name='id' value= ".$id.">";
echo "<input type='submit' value='Delete Page'>";
echo "</form>";

echo "</br>";
echo "</br>";

echo "Page Name: ";
echo "</br>";
echo "<form action='PageUpdate.php' method='post'>";
echo "<input type='text' name='PageName' value='".$name."' style='font-size:20;'>";
$page= str_replace("<p>","",$page);
$page= str_replace("</p>","",$page);


echo "</br>";
echo "</br>";

echo "Page Text: <div><textarea rows='15' cols='50' name='PageText' wrap='hard'>$page</textarea></div>";
echo "<input type='hidden' value=PageText.value>";
echo "<input type='hidden' name='id' value= ".$id.">";
echo "<input type='submit' value='Submit'>";
echo "</form>";
//disconnect from database
$result->free();
$mysqli->close();
?>

<?php include 'footer.php'; ?>
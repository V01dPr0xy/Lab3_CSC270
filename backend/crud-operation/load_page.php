<?php include 'header.php'; ?>

<?php 
include '../reusable_code/reusable_navbar.php';
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
$header = $row['Header_ID'];
$id = $row['ID'];

echo "<form action='add_page.php' method='post'>";
echo "<input type='submit' value='Add Page'>";
echo "</form>";

echo "<form action='delete_page.php' method='delete'>";
echo "<input type='hidden' name='id' value= ".$id.">";
echo "<input type='submit' value='Delete Page'>";
echo "</form>";

echo "</br>";
echo "</br>";

// echo "Header_ID: ";
// echo "</br>";
// echo "<form action='update_page.php' method='post'>";
// echo "<input type='text' name='HeaderId' value='".$header."' style='font-size:20;'>";
// echo "</br>";
echo "Page Name: ";
echo "</br>";
echo "<form action='update_page.php' method='post'>";
echo "<input type='text' name='PageName' value='".$name."' style='font-size:20;'>";
echo "Header_ID";
echo "<input type='text' name='HeaderId' value='".$header."' style='font-size:20;'>";
$page= str_replace("<p>","",$page);
$page= str_replace("</p>","",$page);


echo "</br>";
echo "</br>";

echo "Page Text: <div><textarea rows='15' cols='150' name='PageText' wrap='hard'>$page</textarea></div>";
echo "<input type='hidden' value=PageText.value>";
echo "<input type='hidden' name='id' value= ".$id.">";
echo "<input type='submit' value='Submit'>";
echo "</form>";
//disconnect from database
$result->free();
$mysqli->close();
?>

<?php include 'footer.php'; ?>
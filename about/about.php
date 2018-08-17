<?php include "/../sections/header.php"; ?>
<?php
echo $_SESSION['current_username'];
echo '</br>';
echo $_SESSION['admin_access'];
echo '</br>';
echo $_SESSION['logged_in'];
echo '</br>';
echo $_SESSION['theme'];
?>
<?php include "/../sections/footer.php"; ?>
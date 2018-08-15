<?php
    $_SESSION['username'] == "";
    $_SESSION['admin_access'] == 0;
    session_destroy();

    header("Location: /../lab3_index.php");
?>
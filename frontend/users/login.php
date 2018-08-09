<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../styles/style_login.css">
</head>

<body>
    <div>
        <form id="login_form" action="../../backend/users/login_submit.php" method="post">
            <div class='div' >
                Admin Username: <input type="text" name="username" />
            </div>
            <div class='div' >
                Admin Password: <input type="text" name="password" />
            </div>
            <input class='submit_form' type="submit" value="Submit" />
        </form>
    </div>
</body>

</html>
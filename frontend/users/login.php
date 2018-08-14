<link rel="stylesheet" href="../styles/style_login.css">
<?php include __DIR__ . '/../../backend/sections/header.php'; ?>
<div>
    <form class='submit_form' id="login_form" action="../../backend/users/login_submit.php" method="post">
        Username:  
        <br /> 
        <input type="text" name="username" /> 
        <br />
        Password:  
        <br /> 
        <input type="text" name="password" /> 
        <br /> 
        <br />
        <input class='submit_form_button' type="submit" value="Submit" />
        <br />
        <br />
        <a href="register.php">Register a new user</a>
    </form>
</div>
<?php include __DIR__ . '/../../backend/sections/footer.php'; ?>
<?php include __DIR__ . '/../sections/header.php'; ?>
<link rel="stylesheet" href="../styles/style_login.css">
<div>
    <form class='submit_form' id="login_form" action="../users/login_submit.php" method="post">
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
<?php include __DIR__ . '/../sections/footer.php'; ?>
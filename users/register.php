<?php include include __DIR__ . '/../sections/navbar.php'; ?>
<div>
    <form class='submit_form' id="register_form" action="../users/register_submit.php" method="post">
        Username:  
        <br /> 
        <input type="text" name="username" /> 
        <br />
        Password:  
        <br /> 
        <input type="text" name="password" /> 
        <br /> 
        Confirm Password:  
        <br /> 
        <input type="text" name="password_confirm" /> 
        <br /> 
        <br />
        <input class='submit_form_button' type="submit" value="Submit" />
        <br />
    </form>
</div>